<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insertOrIgnore([
            [
                'nome_categoria' => "SUV",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome_categoria' => "Esportivo",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome_categoria' => "Luxo",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome_categoria' => "Caminhonete",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome_categoria' => "Popular",
                'fk_tipo_categoria' => "1"
            ],

        ]);
    }
}
