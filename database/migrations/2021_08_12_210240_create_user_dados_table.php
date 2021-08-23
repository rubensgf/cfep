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
            $table->string('ncarteirinha')->nullable();
            $table->string('nome')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('sexo')->nullable();
            $table->string('data_nascimento')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('cep')->nullable();
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
            $table->integer('numero_vias')->nullable();
            $table->enum('legado',['0', '1'])->default('0');
            //$table->enum('ativo',['0', '1'])->default('0');
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
