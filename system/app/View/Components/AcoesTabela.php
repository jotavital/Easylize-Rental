<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AcoesTabela extends Component
{
    public $id;
    public $rotaEditar;
    public $rotaExcluir;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $rotaEditar)
    {
        $this->id = $id;
        $this->rotaEditar = $rotaEditar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.acoes-tabela');
    }
}
