<?php

class DeviceHorseTrainerSeeder extends Seeder{
  public function run()
  {
    DB::table('horse')->truncate();
    DB::table('device')->truncate();
    DB::table('trainer')->truncate();
    //Trainer seeds
    Trainer::create(array(
      'degree' => 'Манлай уяаач',
      'profileId' => 2
    ));

    //Device seeds
    Device::Create(array(
      'deviceId' => 'device1',
      'userId' => 1,
    ));
    Device::Create(array(
      'deviceId' => 'device2',
      'userId' => 1,
    ));
    Device::Create(array(
      'deviceId' => 'device3',
      'userId' => 1,
    ));

    //Horse seeds
    Horse::Create(array(
      'name' => 'mori1',
      'likeness' => 'har',
      'deviceId' => '1',
      'trainerId' => 1
    ));
    Horse::Create(array(
      'name' => 'mori2',
      'likeness' => 'har',
      'deviceId' => '2',
      'trainerId' => 1
    ));
    Horse::Create(array(
      'name' => 'mori3',
      'likeness' => 'har',
      'deviceId' => '3',
      'trainerId' => 1
    ));
    Horse::Create(array(
      'name' => 'mori4',
      'likeness' => 'har',
      'deviceId' => '1',
      'trainerId' => 1
    ));
    Horse::Create(array(
      'name' => 'mori5',
      'likeness' => 'har',
      'deviceId' => '2',
      'trainerId' => 1
    ));
    Horse::Create(array(
      'name' => 'mori6',
      'likeness' => 'har',
      'deviceId' => '3',
      'trainerId' => 1
    ));
    Horse::Create(array(
      'name' => 'mori7',
      'likeness' => 'har',
      'deviceId' => '1',
      'trainerId' => 1
    ));
  }
}
