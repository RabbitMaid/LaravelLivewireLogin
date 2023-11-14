<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class Login extends Component
{
    public string $email;
    public string $password;
    public bool $success;


    public function __construct()
    {
        $this->success = false;
    }

    public function auth(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);


        if($validated){
            $this->success = true;
        }


    }

    public function render()
    {
        return view('livewire.login');
    }
}
