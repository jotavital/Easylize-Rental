<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('veiculo/veiculos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculo/create-veiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();

        $veiculo->placa = $request->placaInput;
        $veiculo->chassi = $request->chassiInput;
        $veiculo->renavam = $request->renavamInput;
        $veiculo->cor = $request->corInput;
        $veiculo->marca_id = $request->marcaSelect;
        $veiculo->modelo_id = $request->modeloSelect;
        $veiculo->categoria_id = $request->categoriaVeiculoSelect;

        if ($veiculo->save()) {
            return redirect()->route('veiculos.create')->with('success', 'Veículo adicionado com sucesso!');
        } else {
            return redirect()->route('veiculos.create')->with('error', 'Não foi possível adicionar o veículo, tente novamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculo.edit-veiculo', ['veiculo' => $veiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $veiculo = Veiculo::find($id);

        $veiculo->placa = $request->placaInput;
        $veiculo->chassi = $request->chassiInput;
        $veiculo->renavam = $request->renavamInput;
        $veiculo->cor = $request->corInput;
        $veiculo->marca_id = $request->marcaSelect;
        $veiculo->modelo_id = $request->modeloSelect;
        $veiculo->categoria_id = $request->categoriaVeiculoSelect;

        if ($veiculo->save()) {
            return redirect()->route('veiculos.index')->with('success', 'Veículo editado com sucesso.');
        }else{
            return redirect()->route('veiculos.index')->with('error', 'Erro ao editar veículo.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function getAll()
    {
        echo json_encode(Veiculo::with(['marca:id,nome', 'modelo:id,nome', 'categoria:id,nome'])->get());
    }

    public function ativarInativar(Request $request)
    {
        $idRegistro = $request->idRegistro;

        $veiculo = Veiculo::find($idRegistro);

        if ($veiculo->ativo == 1) {
            $veiculo->ativo = 0;
        } else if ($veiculo->ativo == 0) {
            $veiculo->ativo = 1;
        }

        $veiculo->save();
    }
}
