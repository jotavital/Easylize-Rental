<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($tenantDbName)
    {
        $sql = file_get_contents(base_path() . "/database/sql/easylize_rental_db.sql");

        $sql = str_replace("easylize_rental", $tenantDbName, $sql);

        DB::unprepared($sql);
    }
}
