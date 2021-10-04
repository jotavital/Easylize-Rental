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
            'nome_categoria' => "SUV",
            'fk_categoria' => "1"
        ]);
    }
}
