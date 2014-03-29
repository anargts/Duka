<?php

class Device extends Eloquent{

  protected $table = 'device';

  public function Horses()
  {
    return $this->hasMany('Horse', 'deviceId');
  }

  public function Owner(){
    return $this->belongsTo('User', 'userId');
  }
}
