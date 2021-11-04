<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function showCompanyLogin()
    {
        return view('login-empresa');
    }

    public function companyLogin(Request $request)
    {
        $credentials = [
            'username' => $request->login,
            'password' => $request->senha
        ];

        if(Auth::guard('company')->attempt($credentials)){
            // !!! configurar a conexao do banco de dados da empresa pra ser usado como padrao
            return redirect()->route('admin.login');
        }else{
            return redirect()->back()->with('message', "Erro ao realizar login, verifique as credenciais.");;
        }
        
    }
}
