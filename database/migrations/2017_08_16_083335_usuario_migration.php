<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id'); // id da táboa usuarios
            $table->string('NIF');
            $table->string('nome');
            $table->string('apelido1');
            $table->string('apelido2');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('nomeCont')->nullable();
            $table->string('tlfCont')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            // Foreign Keys
            $table->integer('idFam')->unsigned();

            // Indicamos cal e a chave foránea desta taboa:
            $table->foreign('idFam')->references('id')->on('familiares');

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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('usuarios');
    }
}
