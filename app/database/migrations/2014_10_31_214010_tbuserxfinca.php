<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbuserxfinca extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbuserxfinca',function($table){
            $table->increments('iduserxfinca');
            $table->integer('iduser')->unsigned();
            $table->foreign('iduser')->references('id')->on('users');
            $table->integer('idfinca')->unsigned();
            $table->foreign('idfinca')->references('idfinca')->on('tbfinca');
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
		Schema::dropIfExists('tbuserxfinca');////
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
