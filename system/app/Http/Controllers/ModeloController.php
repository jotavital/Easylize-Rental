<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{

    public function showAllModelos()
    {
        return view('veiculo/modelosVeiculos');
    }

    public function storeModelo(Request $request)
    {
        $modelo = new Modelo;

        $modelo->nome = $request->nomeModeloInput;
        $modelo->fk_marca = $request->marcaSelect;

        if ($modelo->save()) {
            return redirect()->route('modelos.show', ['tenant' => $_COOKIE['tenant_name']])->with('success', 'Modelo cadastrada com sucesso');
        } else {
            return redirect()->route('modelos.show', ['tenant' => $_COOKIE['tenant_name']])->withErrors('error', 'Não foi possível cadastrar o modelo, tente novamente.');
        }
    }

    public function getAllModelos()
    {
        echo json_encode(Modelo::all());
    }

    public function getModelosByMarca(Request $request)
    {

        echo json_encode(Modelo::all()->where('fk_marca', $request->idMarca));
    }
}
