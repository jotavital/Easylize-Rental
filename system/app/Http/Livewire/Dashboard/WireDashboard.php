<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Aluguel;
use Livewire\Component;

class WireDashboard extends Component
{
    public $qtdAlugueisEmAndamento;
    public $qtdAlugueisPagamentoPendente;
    public $completarCadastro;

    public function mount()
    {
        $this->completarCadastro = current_empresa()->completar_cadastro;
        $this->qtdAlugueisEmAndamento = Aluguel::getQtdTotalAlugueisEmAndamento();
        $this->qtdAlugueisPagamentoPendente = Aluguel::getQtdTotalAlugueisPagamentoPendente();
    }

    public function render()
    {
        return view('livewire.dashboard.wire-dashboard');
    }
}
