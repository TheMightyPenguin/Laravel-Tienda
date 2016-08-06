<?php

use App\Usuario;
use App\Producto;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class, 50)
            ->create()
            ->each(function($usuario) {
                for($i = 0; $i <= rand(0, 4); $i++) {
                    $usuario->productos()->save(factory(Producto::class)->make());
                }
            });

        Usuario::create(['nombre' => "Victor",
                         'apellido' => "Tortolero", 
                         'email' => "test@test.com",
                         'telefono' => "04124503477",
                         'password' => bcrypt('1234'),
                         'idestatus' => 1,
                         'idtipousuario' => 1,
                         'idubicacion' => 1,
                         'remember_token' => str_random(10)
        ]);
    }
}
