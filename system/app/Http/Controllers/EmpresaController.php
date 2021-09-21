<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmpresaController extends Controller
{
    
    public static function getTodasEmpresas(){
        return Empresa::all();
    }

    public static function getDadosEmpresa(){
        return Empresa::all()->where('email', Session::get('email'));
    }

}
