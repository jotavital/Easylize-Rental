<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $message;
    public $type;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $title = null, $message)
    {
        $this->title = $title;
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
