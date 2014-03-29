<?php

class TestController extends BaseController{
  public function getTest()
  { //$aimag = Aimag::find(1);
    //$sum = new Sum;
    //$sum->name = "Хонгор";
    //$aimag->sums()->save($sum);

    //$user = User::find(1);
    //return $user->Horses();
    //$Trainer = Trainer::find(1);
    //return $Trainer->Horses;
 
    //$race = Race::all();
    //return $race->toArray();

    //$horse = Horse::find(1);
    //$data = $horse->toArray();
    //$data['race']=$horse->Races->toArray();
    //return $data;

    //$user = User::find(1);
    //return $user->Horses();


    //$race = Race::all();
    //Return $race->toArray();
    //$race = Race::find(1);
    //return $race->Result();

    //$user = User::find(1);
    //$data = array();
    //$data['horses']=$user->Horses();
    //return $data;
    $z = Race::tUls();
    $data = array();
    $data['now'] = date('Y-m-d');
    $data['startDate'] = Race::find(1S)->startDate;
    $data['startTime'] = Race::find(1)->startTime;
    return $data;
  }
}
