<?php

use Illuminate\Database\Seeder;

class FuncionariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $nome = array("Colleen Clemons", "Jarrod Carey", "Vivien Munoz", "Kylan Steele", "Nayda Roach", "Hillary Espinoza", "Mariam Moody", "Timothy Barron", "Galena Rhodes", "Gray Casey", "Herman Summers");
        $cpf = array("16020715913", "16321221368", "16980703368", "16281117594", "16010621768", "16890613356","16240720865", "16020227336", "16670330018", "16500421717", "16370826236");
        
        for ($i=0; $i < 11; $i++) {
            $data_comeco = new DateTime('2018-06-15');
            $data_final = new DateTime('2018-11-26');
            $date_inicio = $faker-> dateTimeBetween($startDate = $data_comeco, $endDate = $data_final, $timezone = null);
            $copy_inicio = $date_inicio;      
            $data_fim = $copy_inicio->add(new DateInterval('P1M'));
            DB::table('funcionarios_financeiro')->insert([
                'nome' => $nome[$i],
                'cpf' => $cpf[$i],
                'solicitacao_inicio_ferias' => $date_inicio ,
                'solicitacao_fim_ferias' => $data_fim
            ]);
        }
    }
}
