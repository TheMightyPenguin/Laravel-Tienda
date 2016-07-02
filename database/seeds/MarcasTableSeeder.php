<?php

use App\Marca;
use App\Estatus;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = ['Sony', 'LG', 'Siragon', 'Pearson'];
        $estatus = Estatus::all()->lists('id')->all();
        $faker = Faker::create();

        foreach($tipos as $tipo){
            Marca::create([
                'nombre' => $tipo,
                'idestatus' => $faker->randomElement($estatus)
            ]);
        }
    }
}
