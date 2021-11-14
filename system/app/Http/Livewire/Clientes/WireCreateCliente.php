<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cidade;
use App\Models\Estado;
use Livewire\Component;

class WireCreateCliente extends Component
{
    public $cidades;
    public $estados;

    public function render()
    {
        $this->estados = Estado::all();
        $this->cidades = Cidade::all();
        return view('livewire.clientes.wire-create-cliente');
    }
}
