<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('nome');
            $table->string('nomeM');
            $table->string('nomeP');
            $table->string('dataNasc');
            $table->string('sexo');
            $table->string('rg');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('uf');
            $table->string('foneF');
            $table->string('fone');
            $table->string('email');
            $table->string('expedido');
            $table->string('validade');
            $table->string('situacao');
            $table->string('graduacao');
            $table->string('universidade');
            $table->string('dataFormacao');
            $table->string('observacao');
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
        Schema::dropIfExists('membros');
    }
}
