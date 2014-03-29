<?php

class UserTableSeeder extends Seeder{

  public function run()
  {
    DB::table('user')->truncate();
    DB::table('profile')->truncate();

    Profile::create(array(
      'registrationNumber' => 'УУ92081999',
      'firstName' => 'Амар',
      'lastName' => 'Баттулга',
      'middleName' => 'Сүрэн',
      'phoneNumber' => '96875792',
      'sex' => 'male',
      'sumId' => 1,
      'description' => 'Operator'
    ));

    Profile::create(array(
      'registrationNumber' => 'ТА92072935',
      'firstName' => 'Амартайван',
      'lastName' => 'Бүдээ',
      'middleName' => 'Цогтхой',
      'phoneNumber' => '99345354',
      'sex' => 'male',
      'sumId' => 1,
      'description' => 'Customer'
    ));

    User::create(array(
      'email' => 'surenamarbattulga@gmail.com',
      'password' => Hash::make('awesome'),
      'role'  => 'admin',
      'profileId' => 1
    ));

    User::create(array(
      'email' => 'amartaivan@amartaivan.com',
      'password' => Hash::make('amartaivan'),
      'role' => 'customer',
      'profileId' => 2
    ));
  }

}
