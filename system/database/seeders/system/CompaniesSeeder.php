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
            'password' => Hash::make("123456"),
            'nome_empresa' => "Rental Car Locações",
            'banco_empresa' => "rentalcar"
        ]);
    }
}
