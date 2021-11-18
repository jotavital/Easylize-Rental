<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Aluguel;
use Livewire\Component;

class WireDashboard extends Component
{
    public $qtdAlugueisEmAndamento;

    public function mount()
    {
        $this->qtdAlugueisEmAndamento = Aluguel::getQtdTotalAlugueisEmAndamento();
    }

    public function render()
    {
        return view('livewire.dashboard.wire-dashboard');
    }
}
