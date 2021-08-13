<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssinaturaMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid');
            $table->string('membro_assinatura')->unique();
            $table->string('token_transacao')->unique();
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->enum('status',['pendente', 'confirmado','cancelado','erro'])->default('pendente');
            $table->rememberToken();
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
        Schema::dropIfExists('assinatura_membros');
    }
}
