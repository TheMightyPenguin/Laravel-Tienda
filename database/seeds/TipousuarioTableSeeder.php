<?php

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
        DB::table('tipousuario')->insert([
            'nombre' => 'administrador'
        ]);

        DB::table('tipousuario')->insert([
            'nombre' => 'vendedor'
        ]);

        DB::table('tipousuario')->insert([
            'nombre' => 'comprador'
        ]);
    }
}
