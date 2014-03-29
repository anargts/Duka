<?php

class Sum extends Eloquent{
  protected $table = 'sum';

  public function aimag()
  {
    return $this->belongsTo('Aimag', 'aimagId');
  }
}

?>
