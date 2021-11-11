<?php

namespace App\Http\Livewire;

use App\Models\MarcaVeiculo;
use App\Models\TipoCategoria;
use Livewire\Component;

class FormCreateVeiculo extends Component
{

    public $marcas;
    public $categorias;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        // !! validar infos do form
    ];

    public function submit()
    {
        $this->validate();
        dd("ok");
    }

    public function mount()
    {
        $this->marcas = MarcaVeiculo::all();
        $this->categorias = TipoCategoria::find(1)->categorias;
    }

    public function render()
    {
        return view('livewire.form-create-veiculo');
    }
}
