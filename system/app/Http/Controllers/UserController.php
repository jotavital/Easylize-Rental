<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public static function insertFirstUser(Request $request, $databaseName){

        $usuario = $request->usuario;
        $senha = Hash::make($request->senha);

        Config::set('database.connections.tenant.database', $databaseName);
        
        $sql = DB::connection('tenant')->statement("INSERT INTO usuario (username, password, privilegios) VALUES ('$usuario', '$senha', 'admin')");

        if($sql){
            return true;
        }

        return false;

    }

}
