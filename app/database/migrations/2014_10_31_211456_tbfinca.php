<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbfinca extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbfinca',function($table){
            $table->increments('idfinca');
            $table->integer('cantfan');
            $table->string('nombre',40);
            $table->string('direccion',40);
            $table->string('telefono',40);
            $table->integer('idciudad')->unsigned();
            $table->foreign('idciudad')->references('idciudad')->on('tbciudad');
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
		Schema::drop('tbciudad');//
	}
}
