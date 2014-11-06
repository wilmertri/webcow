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
            $table->string('documento',10);
            $table->foreign('documento')->references('documento')->on('users');
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
		Schema::drop('tbuserxfinca');////
	}

}
