<?php

namespace App\Http\Livewire\ModeloVeiculo;

use Livewire\Component;
use Livewire\WithFileUploads;

class InputImagensModelo extends Component
{
    use WithFileUploads;

    public $fotosInput = [];

    public function removeImage($key)
    {
        unset($this->fotosInput[$key]);
    }

    public function render()
    {
        return view('livewire.modelo-veiculo.input-imagens-modelo');
    }
}
