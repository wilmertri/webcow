<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbusuario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
            $table->string('documento',10);
            $table->string('nombre',30);
            $table->string('email',100)->unique();
            $table->string('telefono',30);
            $table->string('password');
            $table->tinyInteger('estado');
            $table->integer('idrol')->unsigned();
            $table->foreign('idrol')->references('idrol')->on('tbrol');
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
		Schema::dropIfExists('users');////
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
