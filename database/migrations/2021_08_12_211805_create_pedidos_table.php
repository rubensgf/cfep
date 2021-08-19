<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('produto_id')->nullable();
            $table->string('code_payment')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('valor')->nullable();
            $table->string('observacao')->nullable();
            $table->enum('situacao',['aguardando', 'grafica', 'enviado','finalizado'])->default('aguardando');
            $table->enum('status',['aguardando', 'confirmado','negado','cancelado'])->default('aguardando');
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
        Schema::dropIfExists('pedidos');
    }
}
