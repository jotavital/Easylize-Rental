<?php

namespace App\Http\Controllers;

use App\Models\System\Company;
use App\Models\Tenant;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{

    public static function getAllCompanies()
    {
        echo json_encode(Company::all());
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $company = new Company;

        $company->id = Uuid::uuid();
        $company->usuario = $request->usuario;
        $company->password = Hash::make($request->senha);
        $company->nome_empresa = $request->nome_empresa;
        $company->banco_empresa = $request->usuario;

        if ($company->save()) {

            $tenant = new Tenant;

            $tenant->id = $request->usuario;

            if ($tenant->save()) {

                $newTenant = DB::table('tenants')->select('data')->where('id', '=', $request->usuario)->get()->first();
                $tenantDbName = json_decode($newTenant->data)->tenancy_db_name;

                if (UserController::insertFirstUser($request, $tenantDbName) && EmpresaController::insertFirstEmpresa($request, $tenantDbName)) {
                    return redirect()->back()->with('success', 'Cadastro realizado com sucesso! Acesse sua dashboard em easylizerental.com/' . $request->usuario);
                }
            } else {
                return redirect()->back()->with('error', 'Erro ao realizar o cadastro, tente novamente.');
            }
        } else {
            return redirect()->back()->with('error', 'Erro ao realizar o cadastro, tente novamente.');
        }
    }
}
