<?php

use App\Usuario;
use App\Producto;
use App\Categoria;
use App\Marca;
use App\Ubicacion;

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

Route::get('/', 'UsuarioController@inicio');
Route::get('productos', 'UsuarioController@productos');
Route::get('contacto', 'UsuarioController@contacto');
Route::get('nosotros', 'UsuarioController@nosotros');

Route::group(['prefix' => 'admin'], function() {
	Route::get('/', function(){
		return view('admin.layout');
	})->name('main');

	Route::resource('estatus', 'EstatusController');
});

Route::get('admin', function() {
	return view('admin.layout');
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

Route::get('form', function(){
	return view('prueba');
})->name('form');
