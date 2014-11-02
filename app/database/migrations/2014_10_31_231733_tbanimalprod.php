<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbanimalprod extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbanimalprod',function($table){
            $table->integer('numanimal')->unsigned();
            $table->string('nombre',30);
            $table->date('fechanac');
            $table->integer('pesoanimal');
            $table->string('observaciones',255);
            $table->integer('numpadre');
            $table->integer('nummadre');
            $table->integer('idraza')->unsigned();
            $table->foreign('idraza')->references('idraza')->on('tbraza');
            $table->integer('idhato')->unsigned();
            $table->foreign('idhato')->references('idhato')->on('tbhato');
            $table->integer('idestado')->unsigned();
            $table->foreign('idestado')->references('idestado')->on('tbestadoanimal');
            $table->integer('idtipoanimal')->unsigned();
            $table->foreign('idtipoanimal')->references('idtipoanimal')->on('tbtipoanimal');
            $table->primary('numanimal');
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
		Schema::drop('tbanimalprod');//
	}

}
