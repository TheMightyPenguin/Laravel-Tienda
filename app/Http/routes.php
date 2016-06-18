<?php

use App\Usuario;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('prueba', function() {
	$usuarios = Usuario::all();
	$usuario2 = Usuario::findOrFail(2);
	$drFreddie = Usuario::where('name', '=' , 'Dr. Freddie Fadel MD');
	
	// dd($usuario2);
	dd($usuario2);

	return view('prueba', compact('usuarios', 'usuario2'));
});

Route::get('usertest', function() {
	$usuarios = Usuario::all();
	return view('usertest', compact('usuarios'));
});