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
        $actual_connection = DB::getDefaultConnection();
        $new_connection = 'tenant';
        $old_database = Config::get('database.connections.tenant.database');

        $dotenv = Dotenv::createImmutable(base_path());
        $dotenv->load();

        $credentials = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if (Auth::guard('webcompany')->attempt($credentials)) {
            // ! ainda está pegando o banco de dados rentalCar e nao o do system!!
            $company = Company::where('email', $request->email)->get()->first();

            $database_name = $company->banco_empresa;
            DB::statement("CREATE DATABASE IF NOT EXISTS {$database_name} DEFAULT CHARACTER SET utf8");

            MyHelpers::setDefaultDabaseConnection($actual_connection, $new_connection, $old_database, $database_name);

            // ! error running the migrations in wrong table!! tenta criar um comando pra migrar
            // Artisan::call('migrate', ['--database' => 'tenant', '--path' => 'database/migrations/tenant']);

            Session::push('email', $company->email);

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
            return redirect()->route('login');
        }
    }
}
