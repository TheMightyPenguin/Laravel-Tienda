<?php

use App\Ubicacion;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UbicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ubicacion::class, 30)->create();
    }
}
