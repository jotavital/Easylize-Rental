<?php

namespace App\Http\Livewire\ModeloVeiculo;

use Livewire\Component;
use Livewire\WithFileUploads;

class InputImagensModelo extends Component
{
    use WithFileUploads;

    public $fotosInput = [];
    public $maximoFotos;
    protected $listeners = ['change'];

    public function removeImage($key)
    {
        unset($this->fotosInput[$key]);
    }

    public function validar()
    {
        $qtdFotos = count($this->fotosInput);
        
        $qtdExcedente = $qtdFotos - $this->maximoFotos;

        if ($qtdFotos > $this->maximoFotos) {
            array_splice($this->fotosInput, 0, $qtdExcedente);
            $this->emit('maximoFotosExcedido', "modelo");
        }
    }

    public function render()
    {
        $this->maximoFotos = current_empresa()->plano->qtd_fotos_por_modelo_veiculo;
        return view('livewire.modelo-veiculo.input-imagens-modelo');
    }
}
