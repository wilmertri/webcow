<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbtipoanimal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbtipoanimal',function($table){
			$table->increments('idtipoanimal');
			$table->string('tipo',40);
			$table->string('descripraza',255);
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
		Schema::dropIfExists('tbtipoanimal');//
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
