<?php namespace Mobile\Controller;

use BaseController;
use Auth;
use Race;
use Trainer;

class HomeController extends AuthorizedController {
  public function getHorses(){
    $user = Auth::user();
    $data = array();
    $data['horses']=$user->Horses();
    return $data;
  }

  public function getHorseinfo($horse)
  {
    $data = $horse->toArray();
    $data['race'] = $horse->Races->toArray();
    $data['owner'] = $horse->Owner->toArray();
    $data['trainer'] = $horse->Trainer->toArray();
    return $data;
  }
  
  public function getRaceResult($race)
  {
    $data = array();
    $data['result'] = $race->Result();
    return $data;
  }

  public function getTrainer($trainer)
  {
    return $trainer;
  }

  public function getTrainerHorse($trainer)
  {
    $data = array();
    $data['horses']=$trainer->Horses->toArray();
    return $data;
  }

}
