<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('profile', function($table){
      $table->increments('id');

      $table->string('registrationNumber')->unique();
      $table->string('firstName');
      $table->string('middleName');
      $table->string('lastName');
      $table->string('phoneNumber');
      $table->string('sex');
      $table->string('description');

      $table->integer('sumId')->references('id')->on('sum');

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
    Schema::drop('profile');
	}
}
