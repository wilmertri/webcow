<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
        	'documento' => '1072661319',
            'nombre'  	=> 'Wilmer',
            'apellido' 	=> 'Triana',
            'email'     => 'fabiantriana1072@gmail.com',
            'telefono' 	=> '3212891464',
            'password' 	=> Hash::make('1072661319'),
            'estado' 	=> 1,
            'idrol' 	=> 1
            // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}

?>