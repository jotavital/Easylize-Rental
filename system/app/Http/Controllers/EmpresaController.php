<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    
    public function showRegister(){
        return view('register');
    }

}
