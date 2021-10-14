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
                'nome' => "SUV",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome' => "Esportivo",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome' => "Luxo",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome' => "Caminhonete",
                'fk_tipo_categoria' => "1"
            ],
            [
                'nome' => "Popular",
                'fk_tipo_categoria' => "1"
            ],

        ]);
    }
}
