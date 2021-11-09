<?php

namespace App\Http\Livewire\ModeloVeiculo;

use App\Models\FotosModeloVeiculo;
use Livewire\Component;
use Livewire\WithFileUploads;

class InputImagensModelo extends Component
{
    use WithFileUploads;

    public $modelo;
    public $fotosInput = [];
    public $maximoFotos;

    public function validar()
    {
        $qtdFotos = count($this->fotosInput);

        if ($qtdFotos > $this->maximoFotos) {
            $this->fotosInput = [];
            $this->emit('maximoFotosExcedido', '#fotosInput', 'modelo');
        }
    }

    public function render()
    {
        $this->maximoFotos = current_empresa()->plano->qtd_fotos_por_modelo_veiculo;
        return view('livewire.modelo-veiculo.input-imagens-modelo');
    }
}
