<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcoesTabela extends Component
{
    public $model; // ! objeto do tipo que se quer gerenciar
    public $rotaEditar;
    public $textoSucessoDeletar;
    public $textoErroDeletar;
    public $tituloModalDeletar;
    public $textoModalDeletar; // ! texto que aparece no body do modal
    public $idDeletar;

    public function mount($model, $rotaEditar, $textoSucessoDeletar, $textoErroDeletar, $tituloModalDeletar, $textoModalDeletar)
    {
    }

    public function modalDeletarRecurso()
    {
        $this->idDeletar = $this->model->id;
        $this->emit('abrirModal', '#modalDeletarRecurso');
    }

    public function deletarRecurso()
    {
        if ($this->model::destroy($this->idDeletar)) {
            session()->flash('success', $this->textoSucessoDeletar);
        } else {
            session()->flash('error', $this->textoSucessoDeletar);
        }

        $this->emit('fecharModal', '#modalDeletarRecurso');
        return redirect()->route('marcas.index');
    }

    public function editarRecurso()
    {
        return redirect($this->rotaEditar);
    }

    public function render()
    {
        return view('livewire.acoes-tabela');
    }
}
