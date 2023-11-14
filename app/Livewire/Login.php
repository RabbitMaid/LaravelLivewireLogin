<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


    public function auth()
    {
       $this->validate();

      $attempt =  auth()->attempt([
        'email' => $this->email,
        'password' => $this->password
       ]);

       if($attempt){

        return redirect(route('home'))->with('message', 'You are now Logged in');
       }



    }

    public function render()
    {
        return view('livewire.login');
    }
}
