<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // esta variable indica la tabla a la que esta relacionada en la base de datos
    protected $table = "users";

    // para asignacion masiva
    protected $fillable = ['name', 'apellido', 'email', 'telefono', 'password', 'idestatus', 'idtipousuario'];

    public function tipousuario(){
    	return $this->belongsTo('App\TipoUsuario', 'idtipousuario', 'id');
    }

    public function estatus(){
    	return $this->belongsTo('App\Estatus', 'idestatus', 'id');
    }
}
