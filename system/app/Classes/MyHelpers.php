<?php

namespace App\Classes;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class MyHelpers
{
    public static function createDatabaseIfNotExists()
    {
        DB::setDefaultConnection('mysql');
        $result = DB::select('SHOW DATABASES LIKE "' . $_ENV['DB_DATABASE'] . '"');

        if (empty($result)) {
            DB::unprepared('CREATE DATABASE IF NOT EXISTS ' . $_ENV['DB_DATABASE']);

            DB::setDefaultConnection('default_mysql');
            Artisan::call('db:seed');
        }
    }
}
