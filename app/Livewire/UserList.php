<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $users;

    public function mount(){
        $d = $this->users = User::all();
        // dd($d);
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
