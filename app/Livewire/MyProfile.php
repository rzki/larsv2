<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class MyProfile extends Component
{
    public $user, $name, $email, $password;
    public function mount()
    {
        $this->user = User::where('userId', auth()->user()->userId)->first();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = Hash::check($this->user->password, auth()->user()->password);
    }
    public function render()
    {
        return view('livewire.my-profile');
    }
}
