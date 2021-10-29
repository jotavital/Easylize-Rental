<?php

namespace App\Http\Controllers;

use App\Models\FotosModeloVeiculo;
use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
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
        $modelo = new Modelo;

        $modelo->nome = $request->nomeModeloInput;
        $modelo->ano_modelo = $request->anoModeloSelect;
        $modelo->motor = $request->motorModeloInput;
        $modelo->marca_id = $request->marcaSelect;


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

    public function getAll()
    {
        echo json_encode(Modelo::all());
    }

    public function getModelosByMarca(Request $request)
    {
        echo json_encode(Marca::find($request->idMarca)->modelos);
    }
}
