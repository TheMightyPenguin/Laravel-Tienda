<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // esta variable indica la tabla a la que esta relacionada en la base de datos
    protected $table = "usuarios";

    // para asignacion masiva
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'password', 'idestatus', 'idtipousuario'];

    public function tipousuario()
    {
    	return $this->belongsTo(TipoUsuario::class, 'idtipousuario', 'id');
    }

    public function estatus()
    {
    	return $this->belongsTo(Estatus::class, 'idestatus', 'id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'idusuario', 'id');
    }
}
