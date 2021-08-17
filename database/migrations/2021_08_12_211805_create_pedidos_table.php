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
            //$table->uuid('id')->primary();
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('produto_id');
            $table->string('code_payment')->nullable();
            $table->string('transaction_id')->nullable();
            $table->decimal('valor');
            $table->string('observacao')->nullable();
            $table->enum('situacao',['aguardando', 'finalizado'])->default('aguardando');
            $table->enum('status',['criado', 'confirmado','negado','cancelado'])->default('criado');
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
