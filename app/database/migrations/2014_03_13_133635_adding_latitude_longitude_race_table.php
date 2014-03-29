<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingLatitudeLongitudeRaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::table('race', function($table){
      $table->string('startLatitude');
      $table->string('startLongitude');
      $table->string('finishLatitude');
      $table->string('finishLongitude');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::table('race', function($table){
      $table->dropColumn('startLatitude');
      $table->dropColumn('startLongitude');
      $table->dropColumn('finishLatitude');
      $table->dropColumn('finishLongitude');
    });
	}

}
