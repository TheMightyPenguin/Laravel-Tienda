<?php

use App\TipoProducto;
use App\Estatus;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TipoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = ['nuevo', 'usado'];
        $estatus = Estatus::all()->lists('id')->all();
        $faker = Faker::create();

        foreach($tipos as $tipo){
            TipoProducto::create([
                'nombre' => $tipo,
                'idestatus' => $faker->randomElement($estatus)
            ]);
        }
    }
}
