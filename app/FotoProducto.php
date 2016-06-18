<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoProducto extends Model
{
    protected $table = 'productosfotos';

    protected $fillable = ['idproducto'];
}
