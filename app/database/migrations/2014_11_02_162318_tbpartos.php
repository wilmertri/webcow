<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbpartos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbparto',function($table){
			$table->increments('idparto');
			$table->date('fechaparto');
			$table->tinyInteger('sexo');
			$table->integer('idinseminacion')->unsigned();
            $table->foreign('idinseminacion')->references('idinseminacion')->on('tbinseminacion');
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
		Schema::dropIfExists('tbparto');//
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
