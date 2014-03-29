<?php

class Signal extends Eloquent{
  protected $table = 'indata';

  protected $hidden = array('created_at', 'updated_at');

  static function raceSignal($race, $deviceId){
    $startTime = $race->startDate.' '.$race->startTime;
    $finishTime = $race->startDate.' '.$race->finishTime; 
    return Signal::whereBetween('written_date', array($startTime, $finishTime))->where('eq_id','=',$deviceId)->orderBy('written_date', 'DESC')->first();
  }

  private function latTolat($a){
    $deg = floatval(substr($a,0,2));
    $min = floatval(substr($a,3,2));
    $sec = 60*floatval(substr($a,5))/1000000;
    return $deg+$min/60+$sec/3600;
  }

  private function lonTolon($a){
    $deg = floatval(substr($a,0,3));
    $min = floatval(substr($a,4,2));
    $sec = 60*floatval(substr($a,6))/1000000;
    return $deg+$min/60+$sec/3600;
  }

	private function knot_to_kps($Speed){
		return 0.000514444444*$Speed;
	}
  
  public function toArray(){
    $array = parent::toArray();
    $array['speed']=$this->knot_to_kps(floatval($this->speed));
    return $array;
  }
}
