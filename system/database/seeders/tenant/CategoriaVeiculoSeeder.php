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
                'tipo_categoria_id' => "1"
            ],
            [
                'nome' => "Esportivo",
                'tipo_categoria_id' => "1"
            ],
            [
                'nome' => "Luxo",
                'tipo_categoria_id' => "1"
            ],
            [
                'nome' => "Caminhonete",
                'tipo_categoria_id' => "1"
            ],
            [
                'nome' => "Popular",
                'tipo_categoria_id' => "1"
            ],

        ]);
    }
}
