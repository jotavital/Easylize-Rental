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
    public $estadoSelecionado;
    public $cidadeSelecionada;

    public function updatedEstadoSelecionado()
    {
        $this->cidades = IbgeApiController::getCidadesPorEstado($this->estadoSelecionado);
        $this->emit('ativarInput', '#cidadeSelect');
    }

    public function mount($cliente = null)
    {

        if (Route::getCurrentRoute()->getName() == 'clientes.create') {
            $this->rotaCreate = true;
            $this->setEstadoCidade();
        } else if (Route::getCurrentRoute()->getName() == 'clientes.edit') {
            $this->cliente = $cliente;
            $this->setSexoSelected();
            $this->setTipoTelefoneSelected();
            $this->setEstadoCidade($cliente);
            $this->rotaEdit = true;
        }
    }

    public function render()
    {
        $this->estados = IbgeApiController::getAllEstados();
        $this->cidades = IbgeApiController::getCidadesPorEstado($this->estadoSelecionado);
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

    public function setEstadoCidade($cliente = null)
    {
        if($cliente != null){
            $this->cidades = IbgeApiController::getCidadesPorEstado($cliente->endereco->estado_id);
            $this->estadoSelecionado = $cliente->endereco->estado_id;
            $this->cidadeSelecionada = $cliente->endereco->cidade_id;
        }else{
            $this->cidades = null;
        }
    }
}
