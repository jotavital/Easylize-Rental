<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_veiculo')->insertOrIgnore([
            'id' => 1,
            'descricao' => "Disponível",
            'tipo_alert' => "success",
        ]);
        DB::table('status_veiculo')->insertOrIgnore([
            'id' => 2,
            'descricao' => "Alugado",
            'tipo_alert' => "danger",
        ]);
        DB::table('status_veiculo')->insertOrIgnore([
            'id' => 3,
            'descricao' => "Em manutenção",
            'tipo_alert' => "warning",
        ]);
    }
}
