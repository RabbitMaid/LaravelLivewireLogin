<?php

namespace App\Livewire;
use Livewire\Component;


class Login extends Component
{
    public string $email;
    public string $password;
    public bool $success;
    public string $title = "Login Page";


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


    public function auth()
    {
       $this->validate();

      $attempt =  auth()->attempt([
        'email' => $this->email,
        'password' => $this->password
       ]);

       if($attempt){
        return $this->redirect('/dashboard');
       }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
