<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Producto;
use App\Categoria;
use App\Marca;
use App\Ubicacion;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    public function inicio() {
        $productos = Producto::paginate(12);

	    $categorias = Categoria::all();
	    $marcas = Marca::all();
	    $ubicaciones = Ubicacion::all();

	    return view(
            'usuarios.inicio',
    		compact('productos', 'categorias', 'marcas', 'ubicaciones')
        );
    }

    public function contacto() {
    	return view('pages.contacto');
    }

    public function nosotros() {
    	return view('productos.list');
    }

    public function productos() {
    	$productos = Producto::paginate(9);
    	$categorias = Categoria::all();
    	return view('productos.list');
    }
}
