<?php

class Rider extends Eloquent{
  protected $table = 'rider';

  public function Profile(){
    return $this->belongsTo('profile', 'profileId');
  }

}
