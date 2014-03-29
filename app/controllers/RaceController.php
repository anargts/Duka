<?php

class RaceController extends BaseController{

  public function getIndex()
    {
        $tUlsRace = Race::tUls();
        $tAimagRace = Race::tAimag();
        return View::make('race.index')
            ->with('tUlsRace',$tUlsRace)
            ->with('tAimagRace',$tAimagRace);
    }


    public function getView($race)
    {
  
    }
}
