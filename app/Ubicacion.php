<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicacion';

    protected $fillable = ['nombre', 'idestatus'];

    public function usuarios()
    {
    	return $this->hasMany(Usuario::class, 'idubicacion', 'id');
    }

    public function productos()
    {
    	return $this->hasManyThrough(Producto::class, Usuario::class,
    		'idubicacion', 'idusuario', 'id');
    }
}
