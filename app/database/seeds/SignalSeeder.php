<?php

class SignalSeeder extends Seeder{

  public function run()
  {
    DB::table('indata')->truncate();

    Signal::create(array(
      'written_date' => '2014-3-15 14:41',
      'latitude' => 47.908058,
      'longitude' => 106.825447,
      'eq_id' => 'device1',
      'speed' => '11'
    ));

    Signal::create(array(
      'written_date' => '2014-3-15 14:40',
      'latitude' => 47.927846,
      'longitude' => 106.782188,
      'eq_id' => 'device2',
      'speed' => '10'
    ));

    Signal::create(array(
      'written_date' => '2014-3-15 14:23',
      'latitude' => 47.927846,
      'longitude' => 106.782188,
      'eq_id' => 'device3',
      'speed' => '10'
    ));
  }
}
