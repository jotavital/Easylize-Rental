<?php

namespace App\Http\Controllers;

use App\Classes\MyHelpers;
use App\Models\Company;
use App\Models\Tenant;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();

        $company->usuario = $request->usuario;
        $company->password = Hash::make($request->senha);
        $company->nome_empresa = $request->nome_empresa;
        $company->banco_empresa = $request->usuario;

        if ($company->save()) {
            Artisan::call('database:createTenantDb ' . $request->usuario);
            Artisan::call('database:seedTenantDb ' . $request->usuario);

            // ! set the tenant database connection 
            
            Artisan::call('database:migrateTenantDb');
            
            return redirect()->back()->with('success', 'Cadastro realizado com sucesso! Acesse sua dashboard em ' . $request->usuario . '.com');
        } else {
            return redirect()->back()->with('error', 'Erro ao realizar o cadastro, tente novamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function getAll()
    {
        echo json_encode(Company::all());
    }
}
