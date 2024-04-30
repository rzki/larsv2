<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user;
    public $userId;
    public $name;
    public $email;
    public $password;
    public function mount($userId)
    {
        $d = $this->user = User::where('userId', $userId)->first();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::where('userId', $this->userId)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        return $this->redirectRoute('users.index', navigate:true);
    }
    public function render()
    {
        return view('livewire.user-edit', [
            'user' => $this->user
        ]);
    }
}
