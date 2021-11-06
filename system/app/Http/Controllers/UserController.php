<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public static function insertFirstUser($usuario, $senha)
    {
        $statement = DB::statement("INSERT INTO usuario (username, password, privilegios) VALUES ('$usuario', '$senha', 'admin')");

        if ($statement) {
            return true;
        }

        return false;
    }
}
