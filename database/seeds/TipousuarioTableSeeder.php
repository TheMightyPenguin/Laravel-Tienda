<?php

use App\TipoUsuario;
use Illuminate\Database\Seeder;

class TipousuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create(['nombre' => 'administrador']);
        TipoUsuario::create(['nombre' => 'vendedor']);
        TipoUsuario::create(['nombre' => 'comprador']);
    }
}
