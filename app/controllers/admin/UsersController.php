<?php

class Admin_UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin/users/list'); //
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin/users/form');//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Creamos un nuevo objeto para nuestro nuevo usuario
		$user = new User;

		//Obtenemos la data enviada por el usuario
		$data = Input::all(); //

		//Revisamos si la data es valida
		if($user->isValid($data))
		{
			//Si la data es valida se la asignamos al usuario
			$user->fill($data);
			//Guardamos el usuario
			$user->save();
			//Y devolvemos una redirección a la acción show para mostrar el usuario
			return Redirect::route('admin.users.show', array($user->id));
		}
		else{
			// En caso de error regresa a la acción create con los datos y los errores encontrados
			return Redirect::route('admin.users.create')->withInput()->withErrors($user->errors);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'Aqui mostramos la info del usuario: ' . $id; //
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'Aqui editamos el usuario: ' . $id;//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}