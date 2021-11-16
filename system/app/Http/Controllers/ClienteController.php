<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cliente.create-cliente");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->cpf = $request->cpfInput;
        $cliente->nome = $request->nomeInput;
        $cliente->sexo = $request->sexoSelect;
        $cliente->telefone = $request->telefoneInput;
        $cliente->tipo_telefone = $request->tipoTelefoneSelect;
        $cliente->cnh = $request->cnhInput;
        $cliente->rg = $request->rgInput;
        $cliente->email = $request->emailInput;
        $cliente->data_nascimento = $request->dataNascimentoInput;
        $cliente->rua = $request->ruaInput;
        $cliente->bairro = $request->bairroInput;
        $cliente->numero = $request->numeroInput;
        $cliente->cep = $request->cepInput;
        $cliente->cidade = $request->cidadeSelect;

        if ($cliente->save()) {
            return redirect()->back()->with('success', "Cliente cadastrado com sucesso");
        }else{
            return redirect()->back()->with('error', "Erro ao cadastrar o cliente.");
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
