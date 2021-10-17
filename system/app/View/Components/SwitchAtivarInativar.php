<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SwitchAtivarInativar extends Component
{

    public $id;
    public $checked;
    public $submitFunctionName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $checked, $submitFunctionName)
    {
        $this->id = $id;
        $this->checked = $checked;
        $this->submitFunctionName = $submitFunctionName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.switch-ativar-inativar');
    }
}
