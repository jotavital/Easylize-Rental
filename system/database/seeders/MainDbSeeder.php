<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(base_path() . "/database/sql/" . $_ENV['DB_DATABASE'] . ".sql");
        DB::unprepared($sql);
    }
}
