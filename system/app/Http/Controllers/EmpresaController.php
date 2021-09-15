<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function register(){
        return view('empresa/register');
    }

    public function store(Request $request){
        $empresa = new Empresa();

        $empresa->nome_empresa = $request->nomeEmpresa;

        $empresa->save();

        return redirect('/login');
    }

}
