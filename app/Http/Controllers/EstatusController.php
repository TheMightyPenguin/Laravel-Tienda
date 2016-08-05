<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use App\Estatus;


class EstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatuses = Estatus::all();
        return view('admin.estatus.main', ['estatuses' => $estatuses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estatus.form');
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
            'nombre' => 'required|unique:estatus|max:10|min:5'
        ];

        $data = $request->all();

        $validacion = Validator::make($data ,$rules);

        if($validacion->fails()){
            return redirect()->back()
                             ->withErrors($validacion->errors())
                             ->withInput($data);
        }

        // $data = Estatus::create($data);
        $data = new Estatus($data);
        $data->save();

        $request->session()->flash('mensaje', 'Estatus registrado correctamente');

        return redirect()->to(route('admin.estatus.index'));
                       /*->with('mensaje', 'Estatus registrado correctamente');*/

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
        $estatus = Estatus::findOrFail($id);
        return view('admin.estatus.form', ['estatus' => $estatus]);
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
            'nombre' => 'required|unique:estatus|max:10|min:5'
        ];

        $data = $request->all();

        $validacion = Validator::make($data ,$rules);

        if($validacion->fails()){
            return redirect()->back()
                             ->withErrors($validacion->errors())
                             ->withInput($data);
        }

        Estatus::find($id)->update($request->all());

        $request->session()->flash('mensaje', 'Estatus actualizado correctamente');

        return redirect()->to(route('admin.estatus.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estatus = Estatus::find($id);
        $estatus->delete();

        session()->flash('mensaje', "Estatus eliminado correctamente");

        return redirect()->to(route('admin.estatus.index'));
    }

    public function eliminar($id){
        $estatus = Estatus::find($id);
        $estatus->delete();

        session()->flash('mensaje', "Estatus eliminado correctamente");

        return redirect()->to(route('admin.estatus.index'));
    }
}
