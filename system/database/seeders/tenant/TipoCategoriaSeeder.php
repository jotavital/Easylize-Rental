<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_categoria')->insertOrIgnore([
            'nome_tipo' => "Veículo",
            'nome_tipo' => "Ocorrência",
        ]);
    }
}
