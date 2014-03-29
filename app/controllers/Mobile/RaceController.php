<?php namespace Mobile\Controller;

use BaseController;
use Auth;
use Race;

class RaceController extends BaseController{
  
  public function getRaces()
  {
    $race = Race::all();
    $data = array();
    $data['races'] = $race->toArray();
    Return $data;
  }

  public function getRaceHorse($race){
    $data = array();
    $data['horses']=$race->Horses->toArray();
    return $data;
  }

  public function getRaceResult($race)
  {
    $data = array();
    $data['result'] = $race->Result();
    return $data;
  }

}
