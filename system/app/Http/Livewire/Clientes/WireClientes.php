<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class WireClientes extends Component
{

    public $clientes;

    public function render()
    {
        $this->clientes = Cliente::all();
        return view('livewire.clientes.wire-clientes');
    }
}
