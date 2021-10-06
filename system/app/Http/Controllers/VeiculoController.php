<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{

    public function showCreateVeiculo()
    {
        return view('veiculo/addVeiculo');
    }

    public function storeVeiculo(Request $request)
    {

        $veiculo = new Veiculo();

        $veiculo->placa = $request->placaInput;
        $veiculo->chassi = $request->chassiInput;
        $veiculo->renavam = $request->renavamInput;
        $veiculo->fk_marca = $request->marcaSelect;
        $veiculo->fk_modelo = $request->modeloSelect;
        $veiculo->fk_categoria = $request->categoriaVeiculoSelect;

        if ($veiculo->save()) {
            return redirect()->route('veiculos.create.show', ['tenant' => $_COOKIE['tenant_name']])->with('success', 'Veículo adicionado com sucesso!');
        } else {
            return redirect()->route('veiculos.create.show', ['tenant' => $_COOKIE['tenant_name']])->with('error', 'Não foi possível adicionar o veículo, tente novamente.');
        }
    }
}
