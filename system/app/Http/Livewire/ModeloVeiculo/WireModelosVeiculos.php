<?php

namespace App\Http\Livewire\ModeloVeiculo;

use App\Models\MarcaVeiculo;
use App\Models\ModeloVeiculo;
use Livewire\Component;

class WireModelosVeiculos extends Component
{
    public $marcas;
    public $modelos;
    public $idDeletar;
    public $nomeModelo;

    public function modalDeletarModelo($idDeletar)
    {
        $this->idDeletar = $idDeletar;
        $this->nomeModelo = ModeloVeiculo::find($idDeletar)->nome;
        $this->emit('abrirModal', '#modalDeletarModelo');
    }

    public function deletarModelo()
    {
        if (MarcaVeiculo::destroy($this->idDeletar)) {
            session()->flash('success', 'Modelo excluído com sucesso');
        } else {
            session()->flash('error', 'Erro ao excluir modelo');
        }

        $this->emit('fecharModal', '#modalDeletarModelo');
        return redirect()->route('modelos.index');
    }

    public function render()
    {
        $this->marcas = MarcaVeiculo::all();
        $this->modelos = ModeloVeiculo::all();
        return view('livewire.modelo-veiculo.wire-modelos-veiculos');
    }
}
