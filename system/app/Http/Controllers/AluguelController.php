<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use App\Models\Cliente;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aluguel.alugueis');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("aluguel.create-aluguel");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluguel = new Aluguel();
        $veiculo = Veiculo::find($request->veiculoSelect);
        $cliente = Cliente::find($request->clienteSelect);

        $aluguel->data_inicio = $request->dataInicioInput;
        $aluguel->data_prevista_devolucao = $request->dataPrevistaDevolucaoInput;
        $aluguel->hora_inicio = $request->horaInicioInput;
        $aluguel->hora_devolucao = $request->horaDevolucaoInput;
        $aluguel->observacao = $request->observacaoInput;
        $aluguel->valor = $request->valorInput;

        if (isset($request->pagoInput)) {
            $aluguel->pago = 1;
        } else {
            $aluguel->pago = 0;
        }

        if ($aluguel->veiculo()->associate($veiculo) && $aluguel->cliente()->associate($cliente) && $aluguel->save()) {
            return redirect()->route('alugueis.index')->with('success', 'Aluguel cadastrado com sucesso');
        } else {
            return redirect()->route('alugueis.index')->withErrors('error', 'Não foi possível cadastrar o aluguel, tente novamente.');
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
}
