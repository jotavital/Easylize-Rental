<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class WireClientes extends Component
{

    public $clientes;
    public $textoSucessoDeletar = "Cliente deletado com sucesso";
    public $textoErroDeletar = "Erro ao deletar o cliente";
    public $tituloModalDeletar = "Deletar cliente";

    public function render()
    {
        $this->clientes = Cliente::all();
        return view('livewire.clientes.wire-clientes');
    }
}
