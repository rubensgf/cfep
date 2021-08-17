<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('ncarteirinha');
            $table->string('nome');
            $table->string('nome_mae');
            $table->string('nome_pai')->nullable();
            $table->string('sexo');
            $table->string('data_nascimento');
            $table->string('rg');
            $table->string('cpf');
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('endereco');
            $table->string('numero');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('foto')->nullable();
            $table->string('graduacao')->nullable();
            $table->string('universidade')->nullable();
            $table->string('dataFormacao')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('naturalidade_uf')->nullable();
            $table->enum('doador',['0', '1'])->default('0');
            $table->string('assinatura')->nullable();
            $table->date('expedido')->nullable();
            $table->date('vigencia')->nullable();
            $table->enum('auditado',['0', '1', '2'])->nullable();
            $table->enum('ativo',['0', '1'])->default('0');
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
        Schema::dropIfExists('user_dados');
    }
}
