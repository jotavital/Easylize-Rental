<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Models\System\Company;
use Dotenv\Dotenv;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $dotenv = Dotenv::createImmutable(base_path());
        $dotenv->load();

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
            
            Artisan::call('migrate', ['--database' => $new_connection, '--path' => 'database/migrations/tenant']);
            Session::push('email', $company->email);

            return redirect()->route('admin.login');
        } else {
            return redirect()->route('login')->with('message', "Não foi possível realizar o login! Verifique as credenciais e tente novamente.");
        }
    }

    public function showUserLogin(){
        return view('admin.login-admin');
    }

    public function userLogin(Request $request){
        
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(Request $request){
        if($request->option == "yes"){
            Auth::guard('webcompany')->logout();
            return redirect()->route('login');
        }
    }
}
