<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/



$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Ubicacion::class, function(Faker\Generator $faker) {
    // lists ahora retorna una coleccion, no un array
    $estatuses = App\Estatus::all()->lists('id')->all();

    return [
        'nombre' => $faker->address,
        'idestatus' => $faker->randomElement($estatuses)
    ];
});

$factory->define(App\Usuario::class, function(Faker\Generator $faker) {
    $estatus = App\Estatus::all()->lists('id')->all();
    $tipousuario = App\TipoUsuario::all()->lists('id')->all();
    $ubicacion = App\Ubicacion::all()->lists('id')->all();

    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'email' => $faker->email,
        'telefono' => $faker->phoneNumber,
        'password' => bcrypt(str_random(10)),

        'idestatus' => $faker->randomElement($estatus),
        'idtipousuario' => $faker->randomElement($tipousuario),
        'idubicacion' => $faker->randomElement($ubicacion),

        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Producto::class, function(Faker\Generator $faker) {
    $estatus = App\Estatus::all()->lists('id')->all();
    $usuario = App\Usuario::all()->lists('id')->all();
    $categoria = App\Categoria::all()->lists('id')->all();
    $marca = App\Marca::all()->lists('id')->all();
    $tipoproducto = App\TipoProducto::all()->lists('id')->all();

    return [
        'nombre' => $faker->word,
        'cantidad' => $faker->randomNumber,
        'precio' => $faker->randomFloat,
        'descripcion' => $faker->paragraph,

        'idestatus' => $faker->randomElement($estatus),
        'idusuario' => $faker->randomElement($usuario),
        'idcategoria' => $faker->randomElement($categoria),
        'idmarca' => $faker->randomElement($marca),
        'idtipoproducto' => $faker->randomElement($tipoproducto)
    ];
});
