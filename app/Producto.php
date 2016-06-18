<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['idestatus', 'idtipousuario', 'idcategoria', 'idmarca', 'idtipoproducto', 'nombre', 'cantidad', 'precio', 'descripcion'];
}
