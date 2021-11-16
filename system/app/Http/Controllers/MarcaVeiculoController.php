<?php

namespace App\Http\Controllers;

use App\Models\MarcaVeiculo;
use Illuminate\Http\Request;

class MarcaVeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marca/marcas-veiculos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca/marcas-veiculos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new MarcaVeiculo();
        $marca->nome = $request->nomeMarcaInput;

        if ($marca->save()) {
            return redirect()->route('marcas.index')->with('success', 'Marca cadastrada com sucesso');
        } else {
            return redirect()->route('marcas.index')->withErrors('error', 'Não foi possível cadastrar a marca, tente novamente.');
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
        $marca = MarcaVeiculo::find($id);
        return view('marca.edit-marca', ['marca' => $marca]);
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
        $marca = MarcaVeiculo::find($id);
        $marca->nome = $request->nomeMarcaInput;

        if ($marca->save()) {
            return redirect()->route('marcas.index')->with('success', 'Marca editada com sucesso');
        } else {
            return redirect()->route('marcas.index')->withErrors('error', 'Não foi possível editar a marca, tente novamente.');
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
        $marca = MarcaVeiculo::find($id);

        if ($marca->delete()) {
            return redirect()->route('marcas.index')->with('success', 'Marca deletada com sucesso');
        } else {
            return redirect()->route('marcas.index')->with('error', 'Erro ao deletar a marca');
        }
    }
}
