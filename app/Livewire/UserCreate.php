<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class UserCreate extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

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

        // $this->dispatch('alert-success',
        //     type: 'success',
        //     title: 'User added successfully!',
        //     position: 'center',
        //     timer: 2500);

        session()->flash('success', 'User registered successfully!');

        return $this->redirectRoute('users.index');
    }
    public function render()
    {
        return view('livewire.user-create');
    }
}
