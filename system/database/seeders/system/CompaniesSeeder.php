<?php

namespace Database\Seeders;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insertOrIgnore([
            'id' => Uuid::uuid(),
            'usuario' => "rentalcar",
            'senha' => "123456",
            'banco_empresa' => "rentalcar"
        ]);
    }
}
