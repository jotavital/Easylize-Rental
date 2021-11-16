<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcoesTabela extends Component
{
    public $model; // ! objeto do tipo que se quer gerenciar
    public $rotaEditar;
    public $rotaExcluir;
    public $textoSucessoDeletar;
    public $textoErroDeletar;
    public $tituloModalDeletar;
    public $textoModalDeletar; // ! texto que aparece no body do modal
    public $modalSelector;
    public $temAlert = 0;
    public $alertType = null;
    public $alertTitle = null;
    public $alertMessage = null;

    public function mount($model, $rotaEditar, $rotaExcluir, $textoSucessoDeletar, $textoErroDeletar, $tituloModalDeletar, $textoModalDeletar)
    {
    }

    public function modalDeletarRecurso()
    {
        $this->emit('abrirModal', $this->modalSelector);
    }

    public function editarRecurso()
    {
        return redirect($this->rotaEditar);
    }

    public function render()
    {
        $this->modalSelector = '#modalDeletarRecurso-' . $this->model->id;
        return view('livewire.acoes-tabela');
    }
}
