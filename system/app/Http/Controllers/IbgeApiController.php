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

    public static function getEstadosById($idEstado)
    {
        $response = Http::withoutVerifying()->get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' . $idEstado);
        return $response->object();
    }

    public static function getCidadeById($idCidade)
    {
        $response = Http::withoutVerifying()->get('https://servicodados.ibge.gov.br/api/v1/localidades/municipios/' . $idCidade);
        return $response->object();
    }

    public static function getCidadesPorEstado($idEstado)
    {
        $response = Http::withoutVerifying()->get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' . $idEstado . '/municipios?orderBy=nome');
        return $response->object();
    }
}
