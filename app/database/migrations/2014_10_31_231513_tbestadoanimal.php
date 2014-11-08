<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbestadoanimal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbestadoanimal',function($table){
			$table->increments('idestado');
			$table->string('estado',40);
			$table->string('descripcion',255);
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
		Schema::dropIfExists('tbestadoanimal');//
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
