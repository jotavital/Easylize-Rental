<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showCompanyLogin()
    {
        return view('login-empresa');
    }

    public function companyLogin(Request $request)
    {
        if (Company::where('usuario', "=", $request->login)->exists()) {
            echo "Ok";
        }else{
            echo "no";
        }
        exit;
    }
}
