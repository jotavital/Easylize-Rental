<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Models\System\Company;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $credentials = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if (Auth::guard('webcompany')->attempt($credentials)) {
            $company = Company::where('email', $request->email)->get()->first();

            $database_name = $company->usuario;
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
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('showLogin')->with('message', "Não foi possível realizar o login! Verifique as credenciais e tente novamente.");
        }
    }
}
