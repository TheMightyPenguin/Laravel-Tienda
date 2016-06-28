<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable = ['nombre', 'idestatus'];

    public function productos()
    {
    	return $this->hasMany(Producto::class, 'idmarca', 'id');
    }
}
