<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbhistorial extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbhistorial',function($table){
			$table->increments('idhistorial');
			$table->date('fechahisto');
			$table->string('patodiag',255);
			$table->tinyInteger('vacuna');
			$table->tinyInteger('purga');
			$table->integer('numanimal')->unsigned();
            $table->foreign('numanimal')->references('numanimal')->on('tbanimalprod');
            $table->integer('idorigen')->unsigned();
            $table->foreign('idorigen')->references('idorigendiag')->on('tborigendiag');
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
		Schema::dropIfExists('tbhistorial');//
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
