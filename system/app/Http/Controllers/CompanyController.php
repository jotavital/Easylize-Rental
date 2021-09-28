<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public static function verifyUsername(Request $request)
    {
        if ($request->usuario == "default") {
            echo json_encode("True request!");
        }else{
            echo json_encode("False request!");
        }
    }
}
