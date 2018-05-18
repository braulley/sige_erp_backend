<?php

use Illuminate\Database\Seeder;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $faker = Faker\Factory::create();
        
        for ($i=0; $i < 10; $i++) {                      
            DB::table('funcionarios_financeiro')->insert([
                'nome' => $faker->name,  
                'setor' => $faker->randomElement($array = array ('financeiro')),
                'data_inicio' =>$faker->dateTimeBetween($startDate = '-40 days', $endDate = 'now', $timezone = null),
                'data_fim' => $faker->dateTimeBetween($startDate = '-40 days', $endDate = 'now', $timezone = null),             
            ]);
        }*/
    }
}
