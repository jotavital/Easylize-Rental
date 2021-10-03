<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    
    public function showMarcasVeiculos(){
        return view('veiculo/marcasVeiculos');
    }

    public function storeMarcasVeiculos(){
        
    }

}
