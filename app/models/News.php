<?php

class News extends Eloquent{
  protected $table = 'news';
  static $featured = 1;
  public function cYear()
  {
    $parts = explode('-', $this->created_at);
    return $parts[0];
  }

  public function cMonth()
  {
    $parts = explode('-', $this->created_at);
    return $parts[1];
  }

  public function cDay()
  {
    $p = explode('-', $this->created_at);
    $p = $p[2];
    $pp = explode(' ', $p);
    return $pp[0];
  }
}
