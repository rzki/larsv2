<?php

namespace App\Livewire;

use App\Models\User as Users;
use Livewire\Component;

class User extends Component
{
    public $users;

    public function mount(){
        $this->users = Users::all();
    }
    public function render()
    {
        return view('livewire.user',[
            'users' => $this->users
        ]);
    }
}
