<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca_veiculo')->insertOrIgnore([
            'id' => 1,
            'nome' => "Mercedez Benz",
        ]);
        DB::table('marca_veiculo')->insertOrIgnore([
            'id' => 2,
            'nome' => "BMW",
        ]);
        DB::table('marca_veiculo')->insertOrIgnore([
            'id' => 3,
            'nome' => "Jeep",
        ]);
    }
}
