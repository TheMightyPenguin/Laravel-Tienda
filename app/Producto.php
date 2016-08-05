<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['idestatus', 'idusuario', 'idcategoria', 'idmarca', 'idtipoproducto', 'nombre', 'cantidad', 'precio', 'descripcion'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idcategoria', 'id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'idmarca', 'id');
    }

    public function estatus()
    {
        return $this->belongsTo(Estatus::class, 'idestatus', 'id');
    }

    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class, 'idtipoproducto', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'idusuario', 'id');
    }
}
