<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['idestatus', 'idtipousuario', 'idcategoria', 'idmarca', 'idtipoproducto', 'nombre', 'cantidad', 'precio', 'descripcion'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idcategoria', 'id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'idmarca', 'id');
    }
}
