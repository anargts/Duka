<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	    Eloquent::unguard();
	    $this->call('SignalSeeder');
	    $this->call('AimagSumSeeder');
	    $this->call('UserTableSeeder');
	    $this->call('DeviceHorseTrainerSeeder');
	    $this->call('NewsSeeder');
	    $this->call('RaceSeeder');
	}
}
