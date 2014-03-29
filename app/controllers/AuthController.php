<?php

class AuthController extends BaseController{
  public function postSignin(){
    $postdata = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
    );
    $data = array();
    $data['success'] = 'no';
    if (Auth::attempt($postdata)){
        $data['success'] = 'yes';
    }
    return $data;
}

  public function Signout(){
    Auth::logout();
    return Redirect::route('home');
  }

}
