<?php

class AuthorizedController extends BaseController{
  public function __construct()
  {
    $this->beforeFilter('auth');
  }
}
