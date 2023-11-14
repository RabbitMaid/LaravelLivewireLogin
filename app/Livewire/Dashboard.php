<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public function logout()
    {
        auth()->logout();
        session()->regenerateToken();

        return $this->redirect('/login');
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
