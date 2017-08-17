<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpresaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id'); // id da táboa empresa
            $table->string('CIF');
            $table->string('nome');
            $table->string('nomeContacto');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('lat');
            $table->string('long');
            // FK
            $table->integer('idUser')->unsigned()->index();
            // Programamos que si borramos un empregado o borre tamén na taboa pivot
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        // táboa pivot de relaciºon N:M entre empregado e empresa.
        Schema::create('empregado_empresa',function(Blueprint $table) {
            $table->integer('idEmpo')->unsigned()->index();
            // Programamos que si borramos un empregado o borre tamén na taboa pivot
            $table->foreign('idEmpo')->references('id')->on('empregados')->onDelete('cascade');

            // Programamos que si borramos unha empresa a borre tamén na taboa pivot
            $table->integer('idEmpa')->unsigned()->index();
            $table->foreign('idEmpa')->references('id')->on('empresas')->onDelete('cascade');

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
        Schema::dropIfExists('empresas');
    }
}
