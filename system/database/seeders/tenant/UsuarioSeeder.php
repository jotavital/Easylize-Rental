<?php

namespace Database\Seeders\Tenant;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('usuario')->insertOrIgnore([
            'username' => "default",
            'password' => Hash::make("1234567890"),
            'privilegios' => "comum"
        ]);
    }
}
