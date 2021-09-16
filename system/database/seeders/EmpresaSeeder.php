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
        DB::table('empresa')->insert([
            'nome_empresa' => "Easylize Rental",
            'login' => "easylizerental",
            'senha' => "70198313624"
        ]);
    }
}
