<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbciudad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbciudad',function($table){
            $table->increments('idciudad');
            $table->string('departamento',40);
            $table->string('ciudad',40);
            $table->timestamps();
        });//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::dropIfExists('tbciudad');//
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
