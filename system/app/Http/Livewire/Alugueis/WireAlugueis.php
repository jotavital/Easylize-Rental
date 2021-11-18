<?php

namespace App\Http\Livewire\Alugueis;

use App\Models\Aluguel;
use Livewire\Component;

class WireAlugueis extends Component
{
    public $alugueis;
    public $textoSucessoDeletar = "Aluguel deletado com sucesso";
    public $textoErroDeletar = "Erro ao deletar o aluguel";
    public $tituloModalDeletar = "Deletar aluguel";

    public function mount()
    {
        $this->alugueis = Aluguel::all();
    }

    public function render()
    {
        return view('livewire.alugueis.wire-alugueis');
    }
}
