<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('idestatus')->unsigned()->after('id');
            $table->foreign('idestatus')->references('id')->on('estatus');

            $table->integer('idtipousuario')->unsigned()->after('idestatus');
            $table->foreign('idtipousuario')->references('id')->on('tipousuario');

            $table->integer('idubicacion')->unsigned()->after('idtipousuario');
            $table->foreign('idubicacion')->references('id')->on('ubicacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // no se puede hacer drop a multiples claves foraneas en una
            // llamada al metodo dropForeign a pesar de que se use un arreglo.
            $table->dropForeign(['idestatus']);
            $table->dropForeign(['idtipousuario']);
            $table->dropForeign(['idubicacion']);
            
            $table->dropColumn(['idestatus', 'idtipousuario', 'idubicacion']);
        });
    }
}
