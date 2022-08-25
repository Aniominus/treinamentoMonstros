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
            $table->foreignId('stats_id')->constrained('stats');
            $table->foreignId('tamanho_id')->constrained('tamanhos');
            $table->foreignId('tipo_id')->constrained('tipos');
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
