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

Route::get('/', 'VistaUsuarioController@inicio');
Route::get('productos', 'VistaUsuarioController@productos');
Route::get('contacto', 'VistaUsuarioController@contacto');
Route::get('nosotros', 'VistaUsuarioController@nosotros');

Route::get('ingresar', 'VistaUsuarioController@registro');
Route::get('registro', 'VistaUsuarioController@registro');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@index')->name('main');

	Route::resource('estatus', 'EstatusController');
	Route::resource('usuarios', 'UsuariosController');
	Route::resource('productos', 'ProductosController');

	Route::get('productos/buscar/{name}', 'ProductosController@search');
});

Route::group(['prefix' => 'auth'], function() {
	Route::auth();
});

Route::get('/home', 'HomeController@index');
