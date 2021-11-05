<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{

    public static function generateDatabaseConfigFileWithAllCompanies()
    {

        $companies = Company::all();
        $companiesInFile = json_decode(file_get_contents(base_path() . "/config/tenants_database.json"), true);
        $wasModified = false;

        foreach ($companies as $company) {
            if (!is_null($companiesInFile)) {
                if (!array_key_exists($company->username, $companiesInFile)) {
                    $companiesInFile[$company->username] = [
                        "id" => $company->id,
                        "username" => $company->username,
                        "banco_empresa" => $company->banco_empresa
                    ];

                    $wasModified = true;
                }
            } else {
                $companiesInFile[$company->username] = [
                    "id" => $company->id,
                    "username" => $company->username,
                    "banco_empresa" => $company->banco_empresa
                ];

                $wasModified = true;
            }
        }

        if ($wasModified) {
            file_put_contents(base_path() . "/config/tenants_database.json", json_encode($companiesInFile));
        }

        Artisan::call('config:clear');
    }

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

        if (Auth::guard('company')->attempt($credentials)) {

            DB::setDefaultConnection(Auth::guard('company')->user()->banco_empresa);
            // !!! configurar a conexao do banco de dados da empresa pra ser usado como padrao
            $company = Auth::guard('company')->user();

            if ($company->needs_seeding) {
                Artisan::call('db:seed');
                $companyModel = Company::where('username', '=', $request->login)->first();
                $companyModel->needs_seeding = 0;
                $companyModel->save();
            }

            self::generateDatabaseConfigFileWithAllCompanies();

            return redirect()->route('admin.login');
        } else {
            return redirect()->back()->with('message', "Erro ao realizar login, verifique as credenciais.");;
        }
    }
}
