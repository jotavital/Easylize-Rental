<?php

namespace App\Http\Controllers;

use App\Models\FotosModeloVeiculo;
use App\Models\MarcaVeiculo;
use App\Models\ModeloVeiculo;
use Illuminate\Http\Request;

class ModeloVeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modelo/modelosVeiculos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelo = new ModeloVeiculo;

        $modelo->nome = $request->nomeModeloInput;
        $modelo->ano_modelo = $request->anoModeloSelect;
        $modelo->motor = $request->motorModeloInput;
        $modelo->marca_id = $request->marcaSelect;

        if ($modelo->save()) {
            if ($request->hasFile('fotosInput')) {
                foreach ($request->fotosInput as $photo) {
                    $photoPath = $photo->store('modelos_img');

                    $fotosModeloVeiculo = new FotosModeloVeiculo();
                    $fotosModeloVeiculo->path = $photoPath;
                    $fotosModeloVeiculo->modelo_veiculo_id = $modelo->id;
                    $fotosModeloVeiculo->save();
                }
            }

            return redirect()->route('modelos.index')->with('success', 'Modelo cadastrado com sucesso');
        } else {
            return redirect()->route('modelos.index')->withErrors('error', 'Não foi possível cadastrar o modelo, tente novamente.');
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
        $modelo = ModeloVeiculo::find($id);
        return view('modelo.editModelo', ['modelo' => $modelo]);
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
        $modelo = ModeloVeiculo::find($id);

        $modelo->nome = $request->nomeModeloInput;
        $modelo->ano_modelo = $request->anoModeloSelect;
        $modelo->motor = $request->motorModeloInput;
        $modelo->marca_id = $request->marcaSelect;

        if ($modelo->save()) {

            if ($request->hasFile('fotosInput')) {
                foreach ($request->fotosInput as $photo) {
                    $photoPath = $photo->store('modelos_img');

                    $fotosModeloVeiculo = new FotosModeloVeiculo();
                    $fotosModeloVeiculo->path = $photoPath;
                    $fotosModeloVeiculo->modelo_veiculo_id = $modelo->id;
                    $fotosModeloVeiculo->save();
                }
            }

            return redirect()->route('modelos.index')->with('success', 'Modelo editado com sucesso');
        } else {
            return redirect()->route('modelos.index')->withErrors('error', 'Não foi possível editar o modelo, tente novamente.');
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

    public function getAll()
    {
        echo json_encode(ModeloVeiculo::all());
    }

    public function getModelosByMarca(Request $request)
    {
        echo json_encode(MarcaVeiculo::find($request->idMarca)->modelos);
    }
}
