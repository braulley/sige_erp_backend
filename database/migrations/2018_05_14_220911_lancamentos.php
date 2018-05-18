<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lancamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',50)->nullable();
            $table->string('descricao',200)->nullable();
            $table->string('setor',200)->nullable();
            //$table->enum('setor', ['rh', 'vendas', 'logistica', 'financeiro', 'compras']);
            $table->string('categoria',200)->nullable();
            //$table->enum('categoria', ['receita', 'contas_pagar']);
            $table->decimal('valor', 8, 2);
            $table->dateTime('data_vencimento')->nullable();
            $table->dateTime('data_pagamento')->nullable();
            $table->dateTime('data_registro')->nullable();
            $table->string('pago',200)->nullable();
            //$table->enum('pago', ['sim', 'nao'])->nullable();
            $table->string('recebido',200)->nullable();
            //$table->enum('recebido', ['sim', 'nao'])->nullable();
            $table->string('observacao1',200)->nullable();
            $table->string('observacao2',200)->nullable();
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
        Schema::drop('lancamentos');
    }
}
