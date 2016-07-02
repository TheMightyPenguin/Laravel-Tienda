<?php

use App\Categoria;
use App\Estatus;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = ['Electrodomestico', 'Ropa', 'Comestibles',
                  'Componentes de PC', 'libros'];

        $estatus = Estatus::all()->lists('id')->all();
        $faker = Faker::create();

        foreach($tipos as $tipo){
            Categoria::create([
                'nombre' => $tipo,
                'idestatus' => $faker->randomElement($estatus)
            ]);
        }
    }
}
