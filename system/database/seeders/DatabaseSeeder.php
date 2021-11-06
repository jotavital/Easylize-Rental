<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::setDefaultConnection('default_mysql');
        $this->call(MainDbSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(CidadeSeeder::class);
    }
}
