<?php

namespace App\Http\Livewire\Veiculos;

use App\Models\MarcaVeiculo;
use App\Models\TipoCategoria;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class FormCreateEditVeiculo extends Component
{
    public $marcas;
    public $modelos;
    public $categorias;
    public $rotaCreate = false;
    public $rotaEdit = false;
    public $marcaSelecionada;
    public $veiculo;
    public $modeloSelecionado;

    public function updatedMarcaSelecionada()
    {
        $marca = MarcaVeiculo::find($this->marcaSelecionada);
        $this->modelos = $marca->modelos()->get();
        $this->ativarSelectModelo();
    }

    public function ativarSelectModelo(){
        $this->emit('ativarInput', "#modeloSelect");
    }

    public function mount($veiculo = null)
    {
        if (Route::getCurrentRoute()->getName() == 'veiculos.create') {
            $this->rotaCreate = true;
        } else if (Route::getCurrentRoute()->getName() == 'veiculos.edit') {
            $this->veiculo = $veiculo;
            $this->rotaEdit = true;
            $this->marcaSelecionada = $this->veiculo->marca_id;
            $marca = MarcaVeiculo::find($this->veiculo->marca_id);
            $this->modelos = $marca->modelos()->get();
            $this->modeloSelecionado = $this->veiculo->modelo_id;
        }
        
        $this->marcas = MarcaVeiculo::all();
        $this->categorias = TipoCategoria::find(1)->categorias;
    }

    public function render()
    {
        return view('livewire.veiculos.form-create-edit-veiculo');
    }
}
