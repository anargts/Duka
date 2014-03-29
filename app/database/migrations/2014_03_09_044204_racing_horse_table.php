<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RacingHorseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('race_has_horse', function($table){
      $table->increments('id');

      $table->integer('horseId')->references('id')->on('horse');
      $table->integer('raceId')->references('id')->on('race');

      $table->timestamps();
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('race_has_horse');
	}

}
