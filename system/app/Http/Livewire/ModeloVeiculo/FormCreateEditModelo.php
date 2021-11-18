<?php

namespace App\Http\Livewire\ModeloVeiculo;

use App\Models\MarcaVeiculo;
use App\Models\ModeloVeiculo;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class FormCreateEditModelo extends Component
{
    public $marcas;
    public $rotaCreate = false;
    public $rotaEdit = false;
    public $modelo;

    public function mount($modelo = null)
    {
        if (Route::getCurrentRoute()->getName() == 'modelos.index') {
            $this->rotaCreate = true;
        } else if (Route::getCurrentRoute()->getName() == 'modelos.edit') {
            $this->rotaEdit = true;
            $this->modelo = $modelo;
        }

        $this->marcas = MarcaVeiculo::all();
    }

    public function render()
    {
        return view('livewire.modelo-veiculo.form-create-edit-modelo');
    }
}
