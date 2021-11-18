<?php

namespace App\Http\Livewire\Alugueis;

use App\Models\Cliente;
use App\Models\ModeloVeiculo;
use App\Models\Veiculo;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class FormCreateEditAluguel extends Component
{
    public $veiculos;
    public $clientes;
    public $modelos;
    public $rotaCreate = false;
    public $rotaEdit = false;
    public $modeloSelecionado;

    public function updatedModeloSelecionado()
    {
        if ($this->setVeiculos()) {
            $this->ativarSelectVeiculo();
        }
    }

    public function setVeiculos()
    {
        $modelo = ModeloVeiculo::find($this->modeloSelecionado);
        $this->veiculos = $modelo->veiculos()->get();

        if (count($this->veiculos)) {
            return true;
        } else {
            return false;
        }
    }

    public function ativarSelectVeiculo()
    {
        $this->emit('ativarInput', "#veiculoSelect");
    }

    public function mount($cliente = null)
    {

        if (Route::getCurrentRoute()->getName() == 'alugueis.create') {
            $this->rotaCreate = true;
        } else if (Route::getCurrentRoute()->getName() == 'alugueis.edit') {
            $this->rotaEdit = true;
        }

        $this->clientes = Cliente::all();
        $this->modelos = ModeloVeiculo::all();
    }

    public function render()
    {
        return view('livewire.alugueis.form-create-edit-aluguel');
    }
}
