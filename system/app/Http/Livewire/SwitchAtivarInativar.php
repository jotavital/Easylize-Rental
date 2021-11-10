<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitchAtivarInativar extends Component
{
    public $model;
    public $checked;

    public function setChecked()
    {
        if ($this->model->ativo) {
            $this->checked = "checked";
        } else {
            $this->checked = "";
        }
    }

    public function ativarInativar()
    {
        if ($this->model->ativo) {
            $this->desativar();
        } else {
            $this->ativar();
        }
    }

    public function ativar()
    {
        $this->model->ativo = 1;
        if (!$this->model->save()) {
            $this->emit("erroAtivarRecurso");
        }

        $this->render();
    }

    public function desativar()
    {
        $this->model->ativo = 0;
        if (!$this->model->save()) {
            $this->emit("erroDesativarRecurso");
        }

        $this->render();
    }

    public function render()
    {
        $this->setChecked();
        return view('livewire.switch-ativar-inativar');
    }
}
