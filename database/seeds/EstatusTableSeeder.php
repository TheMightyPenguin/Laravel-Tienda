<?php

use App\Estatus;
use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estatus::create(['nombre' => 'activo']);
        Estatus::create(['nombre' => 'inactivo']);
    }
}
