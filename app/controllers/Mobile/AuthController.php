<?php namespace Mobile\Controller;

use BaseController;
use Redirect;
use Auth;
use Input;

class AuthController extends BaseController{
  public function postSignin(){
    $postdata = array(
      'email' => Input::get('email'),
      'password' => Input::get('password')
    );
    return Input::get('email');
    $data = array();
    if (Auth::attempt($postdata)){
      $data['success']='yes';
      $data['user']=Auth::user()->toArray();
    } else $data['success']='no';
    return $data;
  }

  public function getSignout(){
    if (Auth::logout())
      return array('success' => 'yes');
    else 
      return array('success' => 'no');
  }
}
