<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TratamentoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('tratamentos', function (Blueprint $table) {
            $table->increments('id');// id tratamentos(relacion ternaria usuarios-servizos-empregados)

            $table->dateTime('dateTimeIni');     // DATA-HORA de inicio do tratamento
            $table->dateTime('dateTimeFin');     // DATA-HORA de fin do tratamento
            $table->boolean('realizado');        // Servizo realizado ou non realizado
            $table->string('causa')->nullable(); // motivos polos que un tratamento non se realizou

            // Indicamos o campo que será chave foránea
            $table->integer('idUsu')->unsigned();
            // Indicamos a referencia da FK:
            $table->foreign('idUsu')->references('id')->on('usuarios');

             // Indicamos o campo que será chave foránea
            $table->integer('idServ')->unsigned();
            // Indicamos a referencia da FK:
            $table->foreign('idServ')->references('id')->on('servizos');

            // Indicamos o campo que será chave foránea
            $table->integer('idEmpo')->unsigned();
            // Indicamos a referencia da FK:
            $table->foreign('idEmpo')->references('id')->on('empregados');

            // Indicamos o campo que será chave foránea
            $table->integer('idEmpa')->unsigned();
            // Indicamos a referencia da FK:
            $table->foreign('idEmpa')->references('id')->on('empresas');


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
        Schema::dropIfExists('tratamentos');
    }
}
