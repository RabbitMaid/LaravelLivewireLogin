<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Title;

class Login extends Component
{
    public string $email;
    public string $password;

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


    #[Title("Login Page")]
    public function render()
    {
        return view('livewire.login');
    }
}
