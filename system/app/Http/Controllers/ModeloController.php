<?php

namespace App\Http\Controllers;

use App\Models\FotosModeloVeiculo;
use App\Models\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $modelo->ano_modelo = $request->anoModeloSelect;
        $modelo->motor = $request->motorModeloInput;
        $modelo->fk_marca = $request->marcaSelect;


        if ($modelo->save()) {

            if ($request->hasFile('fotosInput')) {
                foreach ($request->fotosInput as $photo) {
                    $photoPath = $photo->store('modelo_img', 'tenant_img');

                    $fotosModeloVeiculo = new FotosModeloVeiculo();
                    $fotosModeloVeiculo->path = $photoPath;
                    $fotosModeloVeiculo->fk_modelo_veiculo = $modelo->id;
                    $fotosModeloVeiculo->save();
                }
            }

            return redirect()->route('modelos.show')->with('success', 'Modelo cadastrado com sucesso');
        } else {
            return redirect()->route('modelos.show')->withErrors('error', 'Não foi possível cadastrar o modelo, tente novamente.');
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
