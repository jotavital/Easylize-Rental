<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public static function getCategoriasVeiculos(Request $request)
    {
        echo json_encode(Categoria::all()->where('fk_tipo_categoria', 1));
    }
}
