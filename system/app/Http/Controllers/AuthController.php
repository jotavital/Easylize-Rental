<?php

namespace App\Http\Controllers;

use App\Classes\MyHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Models\System\Company;
use Dotenv\Dotenv;
use Illuminate\Foundation\Console\OptimizeCommand;
use Illuminate\Support\Facades\Cache;
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
        $old_connection = 'mysql';
        $new_connection = 'tenant';
        $old_database = Config::get('database.connections.tenant.database');

        $credentials = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if (Auth::guard('webcompany')->attempt($credentials)) {
            $company = Company::where('email', $request->email)->get()->first();

            $database_name = $company->banco_empresa;
            DB::statement("CREATE DATABASE IF NOT EXISTS {$database_name} DEFAULT CHARACTER SET utf8");

            MyHelpers::setDefaultDabaseConnection($old_connection, $new_connection, $old_database, $database_name); // change tenant database configuration

            Artisan::call('migrate', ['--database' => 'tenant', '--path' => 'database/migrations/tenant']); // migrate tenant database

            Session::push('email', $company->email);
            Session::push('nome_empresa', $company->nome_empresa);

            return redirect()->route('admin.login');
        } else {
            return redirect()->route('login')->with('message', "Não foi possível realizar o login! Verifique as credenciais e tente novamente.");
        }
    }

    public function showUserLogin()
    {
        return view('admin.login-admin');
    }

    public function userLogin(Request $request)
    {
        
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        if ($request->option == "yes") {
            Auth::guard('webcompany')->logout();
            Session::flush();
            return redirect()->route('login');
        }
    }
}
