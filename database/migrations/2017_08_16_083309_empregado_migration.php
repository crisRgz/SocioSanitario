<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpregadoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('empregados', function (Blueprint $table) {
            $table->increments('id'); // id da táboa empregados
            $table->string('NIF');
            $table->string('nome');
            $table->string('apelido1');
            $table->string('apelido2');
            $table->string('direccion');
            $table->string('telefono');

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
        Schema::dropIfExists('empregados');
    }
}
