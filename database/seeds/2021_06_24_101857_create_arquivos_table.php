<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('membro_id');
            $table->text('dsArquivo1');
            $table->text('dsArquivo2');
            $table->text('dsArquivo3');
            $table->text('dsArquivo4');
            $table->text('dsArquivo5');
            $table->text('dsArquivo6');
            $table->text('dsArquivo7');
            $table->text('dsArquivo8');
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
        Schema::dropIfExists('arquivos');
    }
}
