<?php

namespace App\Http\Livewire\Alugueis;

use App\Models\Veiculo;
use Livewire\Component;

class Alugueis extends Component
{

    public $veiculos;

    public function render()
    {
        $this->veiculos = Veiculo::getTodosNaoAlugados();
        return view('livewire.alugueis.alugueis');
    }
}
