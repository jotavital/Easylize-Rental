<?php

namespace App\Http\Livewire\Marcas;

use App\Models\MarcaVeiculo;
use Livewire\Component;

class WireMarcasVeiculos extends Component
{
    public $marcas;
    public $tituloModalDeletar = 'Deletar marca';
    public $textoSucessoDeletar = 'Marca deletada com sucesso';
    public $textoErroDeletar = 'Erro ao deletar a marca';

    public function render()
    {
        $this->marcas = MarcaVeiculo::all();
        return view('livewire.marcas.wire-marcas-veiculos');
    }
}
