<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $database_name = $request->usuario;

        DB::statement("CREATE DATABASE IF NOT EXISTS {$database_name}");

        $new_connection = 'tenant';

        DB::purge('mysql');
        config(["database.connections.$new_connection" => [
            "driver" => "mysql",
            "host" => "127.0.0.1",
            "port" => "3308",
            "database" => "$database_name",
            "username" => "root",
            "password" => "",
            "charset" => "utf8",
            "collation" => "utf8_unicode_ci",
            "prefix" => "",
            "strict" => true,
            "engine" => null
        ]]);

        Artisan::call('migrate', ['--database' => $new_connection]);
    }
}
