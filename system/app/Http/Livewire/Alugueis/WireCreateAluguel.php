<?php

namespace App\Http\Livewire\Alugueis;

use App\Models\Veiculo;
use Livewire\Component;

class WireCreateAluguel extends Component
{

    public $veiculo;

    public function render()
    {
        $this->veiculos = Veiculo::getTodosNaoAlugados();
        return view('livewire.alugueis.wire-create-aluguel');
    }
}
