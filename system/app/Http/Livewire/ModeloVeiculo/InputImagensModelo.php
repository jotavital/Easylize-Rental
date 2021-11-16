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
    public $qtd_fotos_atual = 0;

    public function validar()
    {
        $qtd_fotos_input = count($this->fotosInput);

        if(isset($this->modelo)){
            $this->qtd_fotos_atual = count($this->modelo->fotos_modelo);
        }

        $qtd_fotos_total = $this->qtd_fotos_atual + $qtd_fotos_input;

        if ($qtd_fotos_input > $this->maximoFotos || $qtd_fotos_total > $this->maximoFotos) {
            $this->fotosInput = [];
            $this->emit('maximoFotosExcedido', '#fotosInput', 'modelo');
        }
    }

    public function render()
    {
        $this->maximoFotos = current_plano_empresa()->qtd_fotos_por_modelo_veiculo;
        return view('livewire.modelo-veiculo.input-imagens-modelo');
    }
}
