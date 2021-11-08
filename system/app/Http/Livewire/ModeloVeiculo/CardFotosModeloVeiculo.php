<?php

namespace App\Http\Livewire\ModeloVeiculo;

use App\Http\Controllers\FotosModeloVeiculoController;
use Livewire\Component;

class CardFotosModeloVeiculo extends Component
{

    public $modelo;
    public $fotos_modelo;
    public $qtd_fotos;

    public function mount($modelo){
        $this->modelo = $modelo;
        $this->fotos_modelo = $modelo->fotos_modelo;
    }

    public function deletarFoto($id_foto, $key){
        if(FotosModeloVeiculoController::destroy($id_foto)){
            unset($this->fotos_modelo[$key]);
            $this->fotos_modelo = array_values($this->fotos_modelo);
        }else{
            $this->emit('erroExcluirImagem');
        }
    }

    public function render()
    {
        $this->qtd_fotos = count($this->fotos_modelo);
        return view('livewire.modelo-veiculo.card-fotos-modelo-veiculo');
    }
}
