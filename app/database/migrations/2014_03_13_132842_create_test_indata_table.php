<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestIndataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('indata', function($table){
      $table->increments('id');

      $table->datetime('written_date');
      $table->string('longitude');
      $table->string('latitude');
      $table->string('speed');
      $table->string('eq_id')->references('deviceId')->on('device');

      
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
    Schema::drop('indata');
	}

}
