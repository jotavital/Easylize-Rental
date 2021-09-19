<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use App\Models\System\Company;

class CompanyController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $user = Company::where('email', $request->email)->get()->first();

        $database_name = $user->usuario;

        if (Hash::check($request->senha, $user->senha)) {

            $session = $request->session()->put('email', $user->email);

            DB::statement("CREATE DATABASE IF NOT EXISTS {$database_name}");

            $new_connection = 'tenant';

            DB::purge('mysql');
            config(["database.connections.$new_connection" => [
                "driver" => "mysql",
                "host" => $_ENV['DB_HOST'],
                "port" => $_ENV['DB_PORT'],
                "database" => "$database_name",
                "username" => $_ENV['DB_USERNAME'],
                "password" => $_ENV['DB_PASSWORD'],
                "charset" => "utf8",
                "collation" => "utf8_unicode_ci",
                "prefix" => "",
                "strict" => true,
                "engine" => null
            ]]);

            DB::setDefaultConnection($new_connection);

            Artisan::call('migrate', ['--database' => $new_connection, '--path' => 'database/migrations/tenant']);
        }
    }
}
