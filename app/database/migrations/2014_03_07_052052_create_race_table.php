<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('race', function($table){
      $table->increments('id');

      $table->string('name');
      $table->string('location');
      $table->date('startDate');
      $table->time('startTime');
      $table->time('finishTime');
      $table->string('age');
      $table->string('length');
      $table->integer('type');
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
    Schema::drop('race');
	}

}
