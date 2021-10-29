<?php

namespace App\View\Components\scripts;

use Illuminate\View\Component;

class ShowEditarVeiculoModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scripts.show-editar-veiculo-modal');
    }
}
