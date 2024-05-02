<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user, $userId, $name, $email;

    public function mount($userId)
    {
        $this->user = User::where('userId', $userId)->first();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
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

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'User updated successfully!',
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
        return view('livewire.users.edit');
    }
}
