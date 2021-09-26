<?php

namespace App\Http\Controllers;

use App\Classes\MyHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Models\System\Company;
use App\Models\Tenant;

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

            $database_name = $company->banco_empresa;

            Tenant::updateOrCreate(['id' => $database_name]);

            setcookie('tenant_name', $database_name, time() + 60 * 60 * 24 * 30, '/');
            setcookie('nome_empresa', $company->nome_empresa, time() + 60 * 60 * 24 * 30, '/');
            return redirect()->route('admin.login', ['tenant' => $database_name]);
        } else {
            return redirect()->back()->with('message', "Não foi possível realizar o login! Verifique as credenciais e tente novamente.");
        }
    }

    public function showUserLogin()
    {
        return view('admin.login-admin');
    }

    public function userLogin(Request $request)
    {
        $credentials = [
            'username' => $request->login,
            'password' => $request->senha
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard', ['tenant' => $_COOKIE['tenant_name']]);
        }
        return redirect()->route('admin.login', ['tenant' => $_COOKIE['tenant_name'], 'message' => "Não foi possível realizar o login! Verifique as credenciais e tente novamente."]);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('webcompany')->logout();

        MyHelpers::deleteAllCookies();

        return redirect()->route('login');
    }
}
