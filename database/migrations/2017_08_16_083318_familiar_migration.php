<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FamiliarMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('familiares', function (Blueprint $table) {
            $table->increments('id'); // id da táboa familiares
            $table->string('NIF');
            $table->string('nome');
            $table->string('apelido1');
            $table->string('apelido2');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('CCC');

            // Foreign Keys
            $table->integer('idUser')->unsigned();
            // Indicamos cal e a chave foránea desta taboa:
            $table->foreign('idUser')->references('id')->on('users');

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
        Schema::dropIfExists('familiares');
    }
}
