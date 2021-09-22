<?php

namespace Database\Seeders\System;

use Database\Seeders\CompaniesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class SystemDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompaniesSeeder::class);
    }
}