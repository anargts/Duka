<?php

class RaceSeeder extends Seeder{

  public function run()
  {
    DB::table('race')->truncate();
    DB::table('race_has_horse')->truncate();

    // finished
    $race = Race::Create(array(
      'name' => 'Их хурд',
      'location' => 'Хүй долоон худаг',
      'startDate' => '2014-03-15',
      'startTime' => '00:00:00',
      'finishTime' => '23:59:59',
      'age' => 'Даага',
      'length' => '21',
      'type' => 1,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));

    $horse1=Horse::find(1);
    $horse2=Horse::find(2);
    $horse3=Horse::find(3);

    $race->Horses()->attach(1);
    $race->Horses()->attach(2);
    $race->Horses()->attach(3);

    // Now
    $race = Race::Create(array(
      'name' => 'Дүнжингарав',
      'location' => 'Ухаа худаг',
      'startDate' => '2014-03-29',
      'startTime' => '09:30:00',
      'finishTime' => '12:30:00',
      'age' => 'Шүдлэн',
      'length' => '23',
      'type' => 1,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));

    $horse1=Horse::find(4);
    $horse2=Horse::find(5);
    $horse3=Horse::find(6);

    $race->Horses()->attach(4);
    $race->Horses()->attach(5);
    $race->Horses()->attach(6);

    //H:S:M- later start
    $race = Race::Create(array(
      'name' => 'Дархан-50',
      'location' => 'Халзан ам',
      'startDate' => '2014-03-30',
      'startTime' => '9:00:00',
      'finishTime' => '12:30:00',
      'age' => 'Хязаалан',
      'length' => '25',
      'type' => 1,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));

    // Planned
    $race = Race::Create(array(
      'name' => 'Сувдаа',
      'location' => 'Дүлзэн ам',
      'startDate' => '2014-07-13',
      'startTime' => '09:30:00',
      'finishTime' => '12:30:00',
      'age' => 'Соёолон',
      'length' => '27',
      'type' => 1,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));
    $race = Race::Create(array(
      'name' => 'Хурдан хүлэг',
      'location' => 'Сэлэнгэ',
      'startDate' => '2014-07-21',
      'startTime' => '09:30:00',
      'finishTime' => '12:30:00',
      'age' => 'Азарга',
      'length' => '29',
      'type' => 1,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));

    $race = Race::Create(array(
      'name' => 'Арман',
      'location' => 'Хөвсгөл',
      'startDate' => '2014-07-29',
      'startTime' => '06:30:00',
      'finishTime' => '08:30:00',
      'age' => 'Их нас',
      'length' => '19',
      'type' => 1,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));

    // Aimag buyu type=2

    $race = Race::Create(array(
      'name' => 'Одко минь дээ',
      'location' => 'Сэлэнгэ',
      'startDate' => '2013-01-20',
      'startTime' => '18:10:00',
      'finishTime' => '20:10:00',
      'age' => 'Даага',
      'length' => '20',
      'type' => 2,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));
    $race = Race::Create(array(
      'name' => 'Арман минь дээ',
      'location' => 'Хөвсгөл',
      'startDate' => '2014-03-29',
      'startTime' => '18:10:00',
      'finishTime' => '20:10:00',
      'age' => 'Шүдлэн',
      'length' => '22',
      'type' => 2,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));
    $race = Race::Create(array(
      'name' => 'Хонгор минь дээ',
      'location' => 'Баянхонгор',
      'startDate' => '2014-08-01',
      'startTime' => '18:10:00',
      'finishTime' => '20:10:00',
      'age' => 'Хязаалан',
      'length' => '24',
      'type' => 2,
      'startLatitude'  => 47.905296,
      'startLongitude' => 106.711464,
      'finishLatitude' => 47.925545,
      'startLongitude' => 106.961403
    ));


  }
}
