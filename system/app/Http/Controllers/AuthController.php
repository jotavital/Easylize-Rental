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

        $credentials = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if (Auth::guard('webcompany')->attempt($credentials)) {

            $company = Company::where('email', $request->email)->get()->first();

            $_SESSION['nome_empresa'] = $company->nome_empresa;

            $database_name = $company->banco_empresa;
            DB::statement("CREATE DATABASE IF NOT EXISTS {$database_name} DEFAULT CHARACTER SET utf8");

            MyHelpers::setDefaultDabaseConnection($database_name); // !change tenant database configuration

            Artisan::call("database:migrateTenantDatabase");
            Artisan::call('database:seedTenantDb');

            return redirect()->route('admin.login', ['nome_empresa' => $company->nome_empresa]);
        } else {
            return redirect()->back()->with('message', "Não foi possível realizar o login! Verifique as credenciais e tente novamente.");
        }
    }

    public function showUserLogin($nome_empresa)
    {
        return view('admin.login-admin', ['nome_empresa' => $nome_empresa]);
    }

    public function userLogin(Request $request)
    {
        $credentials = [
            'username' => $request->login,
            'password' => $request->senha
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('message', "Não foi possível realizar o login! Verifique as credenciais e tente novamente.");
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        if ($request->option == "yes") {
            Auth::guard('webcompany')->logout();
            $request->session()->flush();
            return redirect()->route('login');
        }
    }
}
