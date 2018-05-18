<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GalpoesAluguel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galpoes_aluguel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->integer('metros_quadrados');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->decimal('valor_aluguel', 5, 2);	
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
        Schema::drop('galpoes_aluguel');
    }
}
