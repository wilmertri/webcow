<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbhato extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbhato',function($table){
			$table->increments('idhato');
			$table->string('nombre',40);
			$table->string('caracteristicas',255);
			$table->integer('idfinca')->unsigned();
            $table->foreign('idfinca')->references('idfinca')->on('tbfinca');
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
		Schema::drop('tbhato');//
	}

}
