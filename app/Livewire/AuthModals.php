<?php

namespace App\Livewire;

use Livewire\Component;

class AuthModals extends Component
{
    public $view = 'login'; // login or register

    public function switchTo($type)
    {
        $this->view = $type;
    }

    public function render()
    {
        return view('livewire.auth-modals');
    }
}
