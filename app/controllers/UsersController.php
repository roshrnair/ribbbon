<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Login the user and start a session
	 */
	public function login()
	{	
		
		$email 		=	Input::get('email');
		$password	=	Hash::make(Input::get('password'));	

		return $password;
	}	

	/**
	 * Register the user and start a session
	 */
	public function register()
	{	
		$fullName	=	Input::get('fullName');
		$email 		=	Input::get('email');
		$password	=	Hash::make(Input::get('password'));	
			
		$user 				=	new User;
		$user->full_name 	=	$fullName;
		$user->email 		=	$email;
		$user->password 	=	$password;

		$user->save();		
	}	

}