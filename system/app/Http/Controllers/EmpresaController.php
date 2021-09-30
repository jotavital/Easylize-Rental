<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmpresaController extends Controller
{

    public static function insertFirstEmpresa(Request $request, $databaseName)
    {

        $nome_empresa = $request->nome_empresa;

        Config::set('database.connections.tenant.database', $databaseName);

        $sql = DB::connection('tenant')->statement("INSERT INTO empresa (nome_empresa) VALUES ('$nome_empresa')");

        if ($sql) {
            return true;
        }

        return false;
    }
}
