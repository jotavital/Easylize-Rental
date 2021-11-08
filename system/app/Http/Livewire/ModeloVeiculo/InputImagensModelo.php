<?php

namespace App\Http\Livewire\ModeloVeiculo;

use Livewire\Component;
use Livewire\WithFileUploads;

class InputImagensModelo extends Component
{
    use WithFileUploads;

    public $fotosInput = [];

    public function testar(){
        dd($this->fotosInput);
    }

    public function render()
    {
        return view('livewire.modelo-veiculo.input-imagens-modelo');
    }
}
