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
        DB::statement("CREATE DATABASE IF NOT EXISTS {$request->usuario}");

        $new_connection = 'tenant';

        config(["database.connections.$new_connection" => [
            // fill with dynamic data:
            "driver" => "mysql",
            "host" => "127.0.0.1",
            "port" => "3308",
            "database" => "admin",
            "username" => "root",
            "password" => "",
            "charset" => "utf8",
            "collation" => "utf8_unicode_ci",
            "prefix" => "",
            "strict" => true,
            "engine" => null
        ]]);

        Artisan::call('migrate', ['--database' => $new_connection]); //adicionar o path das migrations de tenants
    }
}
