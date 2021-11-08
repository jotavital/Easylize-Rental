<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa')->insertOrIgnore([
            'id' => 1,
            'nome_empresa' => $_ENV['NOME_EMPRESA'],
            'plano_id' => $_ENV['PLANO_ID'],
        ]);
    }
}
