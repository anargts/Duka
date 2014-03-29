<?php

class Race extends Eloquent{
    protected $table = 'race';

    static function Uls(){
        return Race::where('type','=','1')->get();
    }

    static function Aimag(){
        return Race::where('type','=','2')->get();
    }
    //check date towlogdson esehiig shalga
    static function tUls(){
        return Race::where('type','=','1')->where('startDate','>',date('Y-m-d'))->get();
        /*
         select * from race
         where type = 1 and startDate > date('now')startDate
        */

    }

    static function tAimag(){
        return Race::where('type','=','2')->where('startDate','>',date('Y-m-d'))->get();
    }
	private function distance($lat1, $lng1, $lat2, $lng2)
	{
		$pi80 = M_PI / 180;
		$lat1 *= $pi80;
		$lng1 *= $pi80;
		$lat2 *= $pi80;
		$lng2 *= $pi80;
	 
		$r = 6372.797; // mean radius of Earth in km
		$dlat = $lat2 - $lat1;
		$dlng = $lng2 - $lng1;
		$a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlng / 2) * sin($dlng / 2);
		$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
		$km = $r * $c;
	 
		return $km;
	}

	private function distanceFromStart($lat, $lng){
		return $this->distance($this->startLatitude, $this->startLongitude, $lat, $lng);
	}

	private function distanceToFinish($lat, $lng){
		return $this->distance($lat, $lng, $this->finishLatitude, $this->finishLongitude);
	}

	private function knot_to_kps($Speed){
		return 0.000514444444*$Speed;
	}

	private function timeToSecond($time){
		sscanf( $time, "%d:%d:%d", $hours, $minutes, $seconds);
		return $hours * 3600 + $minutes * 60 + $seconds;
	}

	private function distancePrediction($Pspeed, $time, $track){
		$guess=$Pspeed*$time;
		return $track+$guess;
	}

	private function analyze($signal){

    date_default_timezone_set('Asia/Ulaanbaatar');
    $lat1 = $signal->latitude;
    $lon1 = $signal->longitude;
    $base = $this->distance($this->startLatitude,$this->startLongitude,$this->finishLatitude,$this->finishLongitude);
		$d1 = $this->distanceFromStart($lat1,$lon1);
		$d2 = $this->distanceToFinish($lat1,$lon1);
		$sp = ($d1+$d2+$base)/2;
		$Area = sqrt($sp*($sp-$d1)*($sp-$d2)*($sp-$base));
		$height = 2*$Area/$base;
    $data = array();

    $now = $this->timeToSecond(date("H:i:s"));
    $datetime = new DateTime($signal->written_date);

    $last_time = $this->timeToSecond( $datetime->format('H:i:s') );
    $last_position = sqrt(pow($d1, 2) - pow($height, 2));
    $last_speed = $this->knot_to_kps(floatval($signal->speed));
    $data['track'] = $this->distancePrediction($last_speed, $now - $last_time , $last_position);
    $data['last_speed'] = $signal->speed;
    return $data;
	}

  public function Result(){
    $horses = $this->Horses;
    $data = array();
    foreach ($horses as $horse) {
      $bb = array();
      $bb['horse'] = $horse->toArray();
      $signal = Signal::raceSignal($this, $horse->Device->deviceId);
      $bb['data'] = $this->analyze($signal);
      $data[] = $bb;
    }

    $size = sizeof($data);
    for ($i = 0; $i < $size; $i++)
      for ($j = $i+1; $j < $size; $j++){
        if ($data[$i]['data']['track']<$data[$j]['data']['track']){
          list($data[$i],$data[$j]) = array($data[$j],$data[$i]);
        }
      }
    return $data;
  }

  protected $hidden = array('pivot', 'created_at', 'updated_at');
  public function Horses()
  {
    return $this->belongsToMany('Horse', 'race_has_horse', 'raceId', 'horseId');
  }

  public function toArray()
  {
    $array = parent::toArray();
    $array['status']=$this->status();
    return $array;
  }

  public function status()
  {
    $current=strtotime(date('Y-m-d H:i:s'));
    $startTime  = strtotime($this->startDate.' '.$this->startTime);
    $finishTime = strtotime($this->startDate.' '.$this->finishTime);
    if ($current<$startTime){
      $status['state'] = 'P';
      $diff = $startTime-$current;
      $status['time'] = $diff; 
    } else 
      if ($current>$finishTime){
        $status['state'] = 'F';
        $diff = $current-$finishTime;
        $status['time'] = $diff;
      } else
        {
          $status['state'] = "L";
          $diff = $current-$startTime;
          $status['time'] = $diff; 
        }
    return $status;
  }

  public function sYear()
  {
    $parts = explode('-', $this->startDate);
    return $parts[0];
  }

  public function sMonth()
  {
    $parts = explode('-', $this->startDate);
    return $parts[1];
  }

  public function sDay()
  {
    $parts = explode('-', $this->startDate);
    return $parts[2];
  }
}
