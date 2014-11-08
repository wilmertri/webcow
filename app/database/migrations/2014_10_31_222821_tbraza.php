<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbraza extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbraza',function($table){
			$table->increments('idraza');
			$table->string('nombreraza',40);
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
		Schema::dropIfExists('tbraza');//
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
