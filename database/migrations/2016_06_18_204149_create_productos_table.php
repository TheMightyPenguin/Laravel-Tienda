<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idestatus')->unsigned();
            $table->foreign('idestatus')->references('id')->on('estatus');

            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('id')->on('users')
                                                          ->onDelete('cascade');

            $table->integer('idcategoria')->unsigned();
            $table->foreign('idcategoria')->references('id')->on('categorias');

            $table->integer('idmarca')->unsigned();
            $table->foreign('idmarca')->references('id')->on('marcas');

            $table->integer('idtipoproducto')->unsigned();
            $table->foreign('idtipoproducto')->references('id')->on('tipoproducto');

            $table->string('nombre');
            $table->integer('cantidad')->unsigned();
            $table->decimal('precio', 8, 4);
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}
