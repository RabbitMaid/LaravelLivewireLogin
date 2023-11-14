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

    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required|min:8'
        ];
    }



    public function auth(Request $request): RedirectResponse
    {
       Auth::login([
        'email' => $this->email,
        'password' => $this->password
       ])
    }

    public function render()
    {
        return view('livewire.login');
    }
}
