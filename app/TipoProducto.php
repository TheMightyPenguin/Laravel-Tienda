<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table = 'tipoproducto';

    protected $fillable = ['nombre', 'idestatus'];
}
