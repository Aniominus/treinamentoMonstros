<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer('forca');
            $table->integer('destreza');
            $table->integer('constituicao');
            $table->integer('inteligencia');
            $table->integer('sabedoria');
            $table->integer('carisma');
            $table->integer('deslocamento');
            $table->integer('pontosdevida');
            $table->integer('pontosdemana');
            $table->integer('defesa');
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
        Schema::dropIfExists('stats');
    }
}
