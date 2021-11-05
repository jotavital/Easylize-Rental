<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TenantDbSeeder::class, false, ['tenantDbName' => Auth::guard('company')->user()->banco_empresa]);
        $this->call(EstadoSeeder::class);
        $this->call(CidadeSeeder::class);
    }
}
