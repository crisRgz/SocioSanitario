<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServizoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('servizos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('descricion')->nullable();

            // Foreign Keys
            $table->integer('idTipo')->unsigned();
            // Indicamos cal e a chave foránea desta taboa:
            $table->foreign('idTipo')->references('id')->on('tipos');

            $table->timestamps();
        });

        // táboa pivot de relaciºon N:M entre empregado e empresa.
        Schema::create('empresa_servizo',function(Blueprint $table) {

            // Programamos que si borramos unha empresa a borre tamén na taboa pivot
            $table->integer('idEmpa')->unsigned()->index();
            $table->foreign('idEmpa')->references('id')->on('empresas')->onDelete('cascade');

            $table->integer('idServ')->unsigned()->index();
            // Programamos que si borramos un empregado o borre tamén na taboa pivot
            $table->foreign('idServ')->references('id')->on('servizos')->onDelete('cascade');

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
        Schema::dropIfExists('servizos');
    }
}
