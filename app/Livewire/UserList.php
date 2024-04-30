<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserList extends Component
{
    public $users;

    public function mount(){
        $d = $this->users = User::all();
    }

    public function delete(User $user)
    {
        $s = $user->where('userId', $user->userId)->delete();
        return $this->redirectRoute('users.index', navigate:true);
        // dd($s);
    }

    public function render()
    {
        return view('livewire.user-list',[
            'users' => $this->users
        ]);
    }
}
