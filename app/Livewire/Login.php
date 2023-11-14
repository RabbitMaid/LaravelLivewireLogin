<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;


    public function login()
    {

    }

    public function render()
    {
        return view('livewire.login');
    }
}
