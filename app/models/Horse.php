<?php

class Horse extends Eloquent{
  protected $table = 'horse';

  protected $hidden = array('created_at', 'updated_at', 'deviceId', 'trainerId', 'pivot');

  public function Device()
  {
    return $this->belongsTo('Device','deviceId');
  }

  public function Owner()
  {
    return $this->Device->Owner();
  }

  public function Races()
  {
    return $this->belongsToMany('Race', 'race_has_horse', 'horseId', 'raceId');
  }

  public function Trainer(){
    return $this->belongsTo('Trainer', 'trainerId');
  }
}
