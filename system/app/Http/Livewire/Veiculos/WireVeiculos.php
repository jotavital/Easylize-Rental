<?php

namespace App\Http\Livewire\Veiculos;

use App\Http\Controllers\VeiculoController;
use App\Models\Veiculo;
use Livewire\Component;

class WireVeiculos extends Component
{
    public $tituloModalDeletar = "Deletar veículo";
    public $textoSucessoDeletar = 'Veículo deletado com sucesso';
    public $textoErroDeletar = 'Erro ao deletar o veículo';

    public function render()
    {
        $this->veiculos = Veiculo::all();
        return view('livewire.veiculos.wire-veiculos');
    }
}
