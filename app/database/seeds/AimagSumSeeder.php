<?php

class AimagSumSeeder extends Seeder{

  public function run()
  {
    DB::table('aimag')->truncate();
    DB::table('sum')->truncate();

    $aimaguud = fopen(__DIR__.'/Aimag.txt', 'r');
    while ($line = fgets($aimaguud)){
      $parts = explode('#',$line);
      $aimag = Aimag::create(array(
        'name' => $parts[0]
      ));
      $sumuud = fopen(__DIR__.'/Sum/'.$parts[1].'.txt', 'r');
      while ($ll = fgets($sumuud)){
        $ll=explode('#',$ll);
        $ll=$ll[0];
        Sum::create(array(
          'name' => $ll,
          'aimagId' => $aimag->id
        ));
      }
      fclose($sumuud);
    }
  }

}
