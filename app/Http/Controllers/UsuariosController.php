<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;
use App\Categoria;
use App\Ubicacion;
use App\TipoUsuario;
use App\Estatus;

use Validator;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::with('estatus', 'ubicacion', 'tipousuario')->get();
        return view('admin.usuarios.main', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estatus = Estatus::lists('nombre', 'id');
        $tiposUsuario = TipoUsuario::lists('nombre', 'id');
        $ubicaciones = Ubicacion::lists('nombre', 'id');
        return view(
            'admin.usuarios.form',
            compact('estatus', 'tiposUsuario', 'ubicaciones')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre'   => 'required',
            'apellido' => 'required',
            'email'    => 'required|email|unique:usuarios',
            'telefono' => 'required',
            'password' => 'required|min:8',
            'idtipousuario' => 'required',
            'idubicacion' => 'required',
            'idestatus' => 'required',
        ];

        $data = $request->all();

        $validacion = Validator::make($data ,$rules);

        if($validacion->fails()){
            return redirect()->back()
                             ->withErrors($validacion->errors())
                             ->withInput($data);
        }

        // dd($data);

        // $data = Estatus::create($data);
        $data = new Usuario($data);
        $data->save();

        return redirect()->to(route('admin.usuarios.index'))
                         ->with('mensaje', 'Usuario registrado correctamente');
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
        $tiposUsuario = TipoUsuario::lists('nombre', 'id');
        $ubicaciones = Ubicacion::lists('nombre', 'id');

        $usuario = Usuario::findOrFail($id);
        return view('admin.usuarios.form',
                    compact('usuario', 'estatus', 'tiposUsuario', 'ubicaciones'));
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
        $rules = [
            'email'    => 'email',
            'password' => 'min:8',
        ];

        $data = $request->all();

        $validacion = Validator::make($data ,$rules);

        if($validacion->fails()){
            return redirect()->back()
                             ->withErrors($validacion->errors())
                             ->withInput($data);
        }

        Usuario::find($id)->update($data);

        return redirect()->to(route('admin.usuarios.index'))
                         ->with('mensaje', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->to(route('admin.usuarios.index'))
                         ->with('mensaje', 'Usuario eliminado correctamente');
    }
}
