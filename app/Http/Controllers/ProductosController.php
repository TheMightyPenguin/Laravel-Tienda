<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Producto;
use App\Usuario;
use App\Categoria;
use App\Ubicacion;
use App\TipoProducto;
use App\Marca;
use App\Estatus;

class ProductosController extends Controller
{
    private $productos;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setProductos();
        return view('admin.productos.main',
                    ['productos' => $this->productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estatus = Estatus::lists('nombre', 'id');
        $usuarios = Usuario::lists('nombre', 'id');
        $categorias = Categoria::lists('nombre', 'id');
        $marcas = Marca::lists('nombre', 'id');
        $tiposProducto = TipoProducto::lists('nombre', 'id');


        return view('admin.productos.form',
                    compact('estatus', 'usuarios', 'categorias', 'marcas', 'tiposProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $data = $request->all();

        Producto::create($data);
        // $data = new Estatus($data);
        // $data->save();

        return redirect()->to(route('admin.productos.index'))
                         ->with('mensaje', 'Producto registrado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estatus = Estatus::lists('nombre', 'id');
        $usuarios = Usuario::lists('nombre', 'id');
        $categorias = Categoria::lists('nombre', 'id');
        $marcas = Marca::lists('nombre', 'id');
        $tiposProducto = TipoProducto::lists('nombre', 'id');

        $producto = Producto::findOrFail($id);
        return view('admin.productos.form',
                    compact('producto', 'estatus', 'usuarios', 'categorias', 'marcas', 'tiposProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function setProductos()
    {
        $this->productos = Producto::with('categoria', 'marca', 'estatus', 'tipoProducto', 'usuario')->get();
    }

    private $rules = [
        'nombre' => 'required|max:50|min:5',
        'cantidad' => 'required|integer',
        'precio' => 'required|numeric',
        'descripcion' => 'required|max:255|min:20',
        'idusuario' => 'required',
        'idcategoria' => 'required',
        'idmarca' => 'required',
        'idestatus' => 'required',
        'idtipoproducto' => 'required'
    ];
}
