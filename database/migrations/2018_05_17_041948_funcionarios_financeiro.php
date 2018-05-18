<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FuncionariosFinanceiro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios_financeiro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('setor');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');	
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
        Schema::drop('funcionarios_financeiro');
    }
}
