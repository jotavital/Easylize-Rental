<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IbgeApiController extends Controller
{
    public static function getAllEstados()
    {
        $response = Http::withoutVerifying()->get('https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome');
        return $response->object();
    }
}
