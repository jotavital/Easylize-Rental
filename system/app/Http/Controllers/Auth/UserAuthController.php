<?php

namespace App\Http\Controllers\Auth;

use App\Classes\MyHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{

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
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('message', "Não foi possível realizar o login, verifique as credenciais e tente novamente!");
        }
    }

    public function logout()
    {
        Auth::logout();

        MyHelpers::deleteAllCookies();

        return redirect()->route('companies.create');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
