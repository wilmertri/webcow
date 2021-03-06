<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tborigendiag extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tborigendiag',function($table){
			$table->increments('idorigendiag');
			$table->string('nombreorigen',40);
			$table->string('caracteristicas',255);
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
		Schema::dropIfExists('tborigendiag');//
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
