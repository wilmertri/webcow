<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbproduccion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbproduccion',function($table){
			$table->increments('idproduccion');
			$table->date('fechapesaje');
			$table->tinyInteger('litrosAM');
			$table->tinyInteger('litrosPM');
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
		Schema::drop('tbproduccion');
	}

}
