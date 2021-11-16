<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;
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
        return view("cliente.clientes");
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
        $endereco = new Endereco();
        $estado = IbgeApiController::getEstadosById($request->estadoSelect);

        $cliente->cpf = $request->cpfInput;
        $cliente->nome = $request->nomeInput;
        $cliente->sexo = $request->sexoSelect;
        $cliente->telefone = $request->telefoneInput;
        $cliente->tipo_telefone = $request->tipoTelefoneSelect;
        $cliente->cnh = $request->cnhInput;
        $cliente->rg = $request->rgInput;
        $cliente->email = $request->emailInput;
        $cliente->data_nascimento = $request->dataNascimentoInput;
        $endereco->rua = $request->ruaInput;
        $endereco->bairro = $request->bairroInput;
        $endereco->numero = $request->numeroInput;
        $endereco->cep = $request->cepInput;
        $endereco->cidade = $request->cidadeSelect;
        $endereco->estado = $estado->nome;
        $endereco->sigla_estado = $estado->sigla;

        if ($endereco->save() && $cliente->endereco()->associate($endereco) && $cliente->save()) {
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
