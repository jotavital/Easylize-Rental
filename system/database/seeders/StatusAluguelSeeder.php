<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusAluguelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_aluguel')->insertOrIgnore([
            'id' => 1,
            'descricao' => "Em andamento",
            'tipo_alert' => "warning",
        ]);
        DB::table('status_aluguel')->insertOrIgnore([
            'id' => 2,
            'descricao' => "Cancelado",
            'tipo_alert' => "danger",
        ]);
        DB::table('status_aluguel')->insertOrIgnore([
            'id' => 3,
            'descricao' => "Não iniciado",
            'tipo_alert' => "info",
        ]);
        DB::table('status_aluguel')->insertOrIgnore([
            'id' => 4,
            'descricao' => "Finalizado",
            'tipo_alert' => "success",
        ]);
    }
}
