<?php

namespace App\Http\Livewire\Clientes;

use App\Http\Controllers\IbgeApiController;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class FormCreateEditCliente extends Component
{

    public $cliente = null;
    public $cidades;
    public $estados;
    public $rotaCreate = false;
    public $rotaEdit = false;
    public $sexoMasculinoSelected = "";
    public $sexoFemininoSelected = "";
    public $sexoOutroSelected = "";
    public $celularSelected = "";
    public $fixoSelected = "";

    public function mount($cliente = null)
    {
        
        if (Route::getCurrentRoute()->getName() == 'clientes.create') {
            $this->rotaCreate = true;
        } else if (Route::getCurrentRoute()->getName() == 'clientes.edit') {
            $this->cliente = $cliente;
            $this->setSexoSelected();
            $this->setTipoTelefoneSelected();
            $this->rotaEdit = true;
        }

        $this->estados = IbgeApiController::getAllEstados();
    }

    public function render()
    {
        return view('livewire.clientes.form-create-edit-cliente');
    }

    public function setSexoSelected()
    {
        $sexo = $this->cliente->sexo;

        if ($sexo == "Masculino") {
            $this->sexoMasculinoSelected = "selected";
        } else if ($sexo == "Feminino") {
            $this->sexoFemininoSelected = "selected";
        } else if ($sexo == "Outro") {
            $this->sexoOutroSelected = "selected";
        }
    }

    public function setTipoTelefoneSelected()
    {
        $tipoTelefone = $this->cliente->tipo_telefone;

        if ($tipoTelefone == "Celular") {
            $this->celularSelected = "selected";
        } else if ($tipoTelefone == "Fixo") {
            $this->fixoSelected = "selected";
        }
    }
}
