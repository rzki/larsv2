<?php

namespace App\Livewire\Users;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\On;

class UserIndex extends Component
{
    public $users;
    public $userId;
    protected $listeners = ['deleteConfirmed' => 'delete'];

    public function mount(){
        $d = $this->users = User::all();
    }
    public function deleteConfirm($userId){
        $this->userId = $userId;
        $this->dispatch('delete-confirmation');
    }
    public function delete()
    {
        $users = User::where('userId', $this->userId)->first();
        $users->delete();

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'User deleted successfully!',
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
        return view('livewire.users.index',[
            'users' => $this->users
        ]);
    }
}
