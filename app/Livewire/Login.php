<?php

namespace App\Livewire;
use Livewire\Component;


class Login extends Component
{
    public string $email;
    public string $password;
    public string $title;

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
        $this->title = "Login";
        return view('livewire.login');
    }
}
