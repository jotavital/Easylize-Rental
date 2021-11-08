<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plano')->insertOrIgnore([
            'id' => 1,
            'nome' => "Starter",
            'descricao' => "O plano ideal para começar sua empresa de locação",
            'valor' => 59.90,
            'qtd_veiculos' => 10,
            'qtd_alugueis_mensais' => 100,
            'qtd_funcionarios' => 5,
            'qtd_modelo_veiculo' => 10,
            'qtd_marca_veiculo' => 10,
            'qtd_fotos_por_modelo_veiculo' => 5,
            'qtd_usuario' => 2
        ]);
        DB::table('plano')->insertOrIgnore([
            'id' => 2,
            'nome' => "Basic",
            'descricao' => "O plano ideal para sua empresa de locação que está crescendo",
            'valor' => 79.90,
            'qtd_veiculos' => 20,
            'qtd_alugueis_mensais' => 200,
            'qtd_funcionarios' => 7,
            'qtd_modelo_veiculo' => 20,
            'qtd_marca_veiculo' => 20,
            'qtd_fotos_por_modelo_veiculo' => 10,
            'qtd_usuario' => 3
        ]);
        DB::table('plano')->insertOrIgnore([
            'id' => 3,
            'nome' => "Ideal",
            'descricao' => "O plano perfeito para sua empresa de locação de médio porte",
            'valor' => 109.90,
            'qtd_veiculos' => 40,
            'qtd_alugueis_mensais' => 400,
            'qtd_funcionarios' => 15,
            'qtd_modelo_veiculo' => 40,
            'qtd_marca_veiculo' => 40,
            'qtd_fotos_por_modelo_veiculo' => 10,
            'qtd_usuario' => 5
        ]);
    }
}
