<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TruncateAllTables::class)

        $this->call(EstatusTableSeeder::class);
        $this->call(TipousuarioTableSeeder::class);
        $this->call(UbicacionTableSeeder::class);
        $this->call(TipoProductoTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(MarcasTableSeeder::class);

        $this->call(UsuariosTableSeeder::class);

        // $this->call(ProductosTableSeeder::class);
    }
}
