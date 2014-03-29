<?php

class Profile extends Eloquent{
  protected $table = 'profile';
  protected $hidden = array('sumId','created_at','updated_at');

  public function sum(){
    return $this->belongsTo('Sum','sumId');
  }

  public function toArray(){
    $array = parent::toArray();
    $array['sumName']=$this->sum->name;
    $array['aimagName']=$this->sum->aimag->name;
    return $array;
  }
}
?>
