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
        $this->call(PlanoSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(TipoCategoriaSeeder::class);
        $this->call(CategoriaSeeder::class);
    }
}
