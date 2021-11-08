<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedOnce extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::setDefaultConnection('default_mysql');
        $this->call(EstadoSeeder::class);
        $this->call(CidadeSeeder::class);
    }
}
