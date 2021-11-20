<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelo_veiculo')->insertOrIgnore([
            'id' => 1,
            'nome' => "ASL Black Series",
            'ano_modelo' => 2022,
            'motor' => "3.6",
            'marca_id' => 1,
        ]);
        DB::table('modelo_veiculo')->insertOrIgnore([
            'id' => 2,
            'nome' => "M6",
            'ano_modelo' => 2021,
            'motor' => "4.1",
            'marca_id' => 2,
        ]);
        DB::table('modelo_veiculo')->insertOrIgnore([
            'id' => 3,
            'nome' => "Compass",
            'ano_modelo' => 2020,
            'motor' => "2.8",
            'marca_id' => 3,
        ]);
        DB::table('modelo_veiculo')->insertOrIgnore([
            'id' => 4,
            'nome' => "Renegade",
            'ano_modelo' => 2019,
            'motor' => "2.4",
            'marca_id' => 3,
        ]);
    }
}
