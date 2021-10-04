<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsuarioSeeder::class,
            TipoCategoriaSeeder::class,
            CategoriaVeiculoSeeder::class
        ]);
    }
}
