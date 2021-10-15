<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class ModalEditarVeiculo extends Component
{

    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modals.modal-editar-veiculo');
    }
}
