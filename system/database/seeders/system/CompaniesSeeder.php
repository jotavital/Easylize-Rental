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
            'senha' => Hash::make("123456"),
            'email' => "rentalcar@gmail.com",
            'banco_empresa' => "rentalcar"
        ]);
    }
}
