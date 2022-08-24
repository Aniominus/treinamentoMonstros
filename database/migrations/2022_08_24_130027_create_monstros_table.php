<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonstrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monstros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('desafio');
            $table->foreignId('stats')->constrained('stats');
            $table->foreignId('tamanho')->constrained('tamanhos');
            $table->foreignId('tipo')->constrained('tipos');
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
        Schema::dropIfExists('monstros');
    }
}
