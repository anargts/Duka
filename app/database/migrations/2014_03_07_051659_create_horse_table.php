<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('horse', function($table){
      $table->increments('id');

      $table->string('name');
      $table->string('likeness');
      $table->integer('deviceId')->references('id')->on('device');
      $table->integer('trainerId')->references('id')->on('trainer');
      $table->string('image1');
      $table->string('image2');
      $table->string('image3');

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
    Schema::drop('horse');
	}

}
