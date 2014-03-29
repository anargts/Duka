<?php

class Aimag extends Eloquent{
  protected $table = 'aimag';
  protected $fillable = array('name');
  public function sums()
  {
    return $this->hasMany('Sum','aimagId');
  }
}

?>
