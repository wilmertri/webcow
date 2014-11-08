<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbinseminacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbinseminacion',function($table){
			$table->increments('idinseminacion');
			$table->date('fechainse');
			$table->string('toro',255);
			$table->tinyInteger('estadoinse');
			$table->string('observacion',255);
			$table->integer('numanimal')->unsigned();
            $table->foreign('numanimal')->references('numanimal')->on('tbanimalprod');
			$table->timestamps();
		}); //
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::dropIfExists('tbinseminacion');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
