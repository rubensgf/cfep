<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_files', function (Blueprint $table) {
            //$table->uuid('id')->primary();
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('ficha')->nullable();
            $table->string('diploma')->nullable();
            $table->string('diploma_verso')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('titulo')->nullable();
            $table->string('comprovante')->nullable();
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
        Schema::dropIfExists('user_files');
    }
}
