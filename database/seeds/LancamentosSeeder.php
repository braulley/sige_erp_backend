<?php

use Illuminate\Database\Seeder;

class LancamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       
        /*$faker = Faker\Factory::create();
        
        for ($i=0; $i < 5000; $i++) {                      
            DB::table('lancamentos')->insert([
                'nome' => $faker->name,  
                'setor' => $faker->randomElement($array = array ('vendas')),
                'categoria' => $faker->randomElement($array = array ('receitas')),
                'valor' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1500),
                'data_registro' => $faker->dateTimeBetween($startDate = '-360 days', $endDate = 'now', $timezone = null),                
                'descricao' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'observacao1' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'observacao2' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            ]);
        }

        $faker1 = Faker\Factory::create();
        for ($i=0; $i < 5000; $i++) {        
            $dataRegistro = $faker1->dateTimeBetween($startDate = '-360 days', $endDate = 'now', $timezone = null);
            $dataVencimento = $faker1->dateTimeInInterval($startDate = $dataRegistro , $interval = '+ 30 days', $timezone = null); 
            $dataPagamento = $faker1->dateTimeBetween($startDate = $dataRegistro, $endDate =  $dataVencimento, $timezone = null);
            DB::table('lancamentos')->insert([
                'nome' => $faker1->company,  
                'setor' => $faker->randomElement($array = array ('rh','logistica','compras','financeiro','vendas')),
                //'setor' => $faker1->randomElement($array = array ('vendas')),
                'categoria' => $faker1->randomElement($array = array ('despesas')),
                'valor' => $faker1->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1500),
                'data_registro' => $dataRegistro,
                'data_vencimento' => $dataVencimento,
                'data_pagamento' => $dataPagamento,                
                'pago' => $faker1->randomElement($array = array ('sim')),
                'descricao' => $faker1->sentence($nbWords = 6, $variableNbWords = true),
                'observacao1' => $faker1->sentence($nbWords = 6, $variableNbWords = true),
                'observacao2' => $faker1->sentence($nbWords = 6, $variableNbWords = true),
            ]);
        }*/

        $faker2 = Faker\Factory::create();
        for ($i=0; $i < 1000; $i++) {
            $dataRegistros = $faker2->dateTimeBetween($startDate = '-40 days', $endDate = 'now', $timezone = null);
            $dataVencimentos = $faker2->dateTimeInInterval($startDate = $dataRegistros , $interval = '+ 30 days', $timezone = null); 
            DB::table('lancamentos')->insert([
                'nome' => $faker2->company,  
                'setor' => $faker2->randomElement($array = array ('rh','logistica','compras','financeiro','vendas')),
                'categoria' => $faker2->randomElement($array = array ('despesas_pagar')),
                'valor' => $faker2->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1500),
                'data_registro' => $dataRegistros,
                'data_vencimento' =>  $dataVencimentos,
                'pago' => $faker2->randomElement($array = array ('sim','nao')),
                'descricao' => $faker2->sentence($nbWords = 6, $variableNbWords = true),
                'observacao1' => $faker2->sentence($nbWords = 6, $variableNbWords = true),
                'observacao2' => $faker2->sentence($nbWords = 6, $variableNbWords = true),
            ]);
        }
    }
}
