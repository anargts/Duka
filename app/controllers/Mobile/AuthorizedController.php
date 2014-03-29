<?php namespace Mobile\Controller;

use BaseController;

class AuthorizedController extends BaseController{
  public function __construct(){
    $this->beforeFilter('mobile-auth');
  }
}
