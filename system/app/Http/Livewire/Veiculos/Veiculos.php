<?php

namespace App\Http\Livewire\Veiculos;

use App\Models\Veiculo;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Veiculos extends Component
{

    public $idDeletar;
    public $placa;

    public function modalDeletarVeiculo($idDeletar)
    {
        $this->idDeletar = $idDeletar;
        $this->placa = Veiculo::find($idDeletar)->placa;
        $this->emit('abrirModal', '#modalDeletarVeiculo');
    }

    public function deletarVeiculo()
    {
        if (Veiculo::destroy($this->idDeletar)) {
            // ! solicitar redraw da table qnd apagar veiculo
            session()->flash('success', 'Veículo excluído com sucesso');
        } else {
            session()->flash('error', 'Erro ao excluir veículo');
        }

        $this->emit('fecharModal', '#modalDeletarVeiculo');
        return redirect()->route('veiculos.index');
    }

    public function render()
    {
        $this->veiculos = Veiculo::all();
        return view('livewire.veiculos.veiculos');
    }
}
