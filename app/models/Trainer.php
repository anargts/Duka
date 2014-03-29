<?php

class Trainer extends Eloquent{
  protected $table = 'trainer';

  protected $hidden = array('created_at', 'updated_at');

  public function Profile(){
    return $this->belongsTo('Profile', 'profileId');
  }

  public function Horses()
  {
    return $this->hasMany('Horse', 'trainerId');
  }

  public function toArray()
  {
    $array = parent::toArray();
    $array['profile'] = $this->Profile->toArray();
    return $array;
  }
}

?>

