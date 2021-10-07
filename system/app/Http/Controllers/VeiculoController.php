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
        return view('veiculo/allVeiculos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculo/addVeiculo');
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
        $veiculo->fk_marca = $request->marcaSelect;
        $veiculo->fk_modelo = $request->modeloSelect;
        $veiculo->fk_categoria = $request->categoriaVeiculoSelect;

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function getAll(){
        echo json_encode(Veiculo::all()); 
        // ! tentar retornar ja com os valores de marca, modelo e categoria
    }
}
