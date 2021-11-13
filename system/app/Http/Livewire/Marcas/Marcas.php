<?php

namespace App\Http\Livewire\Marcas;

use App\Models\MarcaVeiculo;
use Livewire\Component;

class Marcas extends Component
{

    public $marcas;
    public $nomeMarca;
    public $idDeletar;

    public function modalDeletarMarca($idDeletar)
    {
        $this->idDeletar = $idDeletar;
        $this->nomeMarca = MarcaVeiculo::find($idDeletar)->nome;
        $this->emit('abrirModal', '#modalDeletarMarca');
    }

    public function deletarMarca()
    {
        if (MarcaVeiculo::destroy($this->idDeletar)) {
            session()->flash('success', 'Marca excluída com sucesso');
        } else {
            session()->flash('error', 'Erro ao excluir marca');
        }

        $this->emit('fecharModal', '#modalDeletarMarca');
        return redirect()->route('marcas.index');
    }

    public function render()
    {
        $this->marcas = MarcaVeiculo::all();
        return view('livewire.marcas.marcas');
    }
}
