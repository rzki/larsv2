<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class UserCreate extends Component
{
    public $name, $email, $password;

    public function create(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        User::create([
            'userId' => Str::orderedUuid(),
            'role_id' => 1,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'User registered successfully!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 2500,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);

        return $this->redirectRoute('users.index', navigate:true);
    }
    public function render()
    {
        return view('livewire.users.create');
    }
}
