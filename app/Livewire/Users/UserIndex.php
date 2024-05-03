<?php

namespace App\Livewire\Users;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;
    public $search, $userId;
    public $sortBy='created_at', $sortDir='ASC';
    public $perPage = 5;
    protected $listeners = ['deleteConfirmed' => 'delete'];
    public function sort($sortByField)
    {
        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $sortByField;
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
            'users' => User::search($this->search)
            ->orderBy($this->sortBy,$this->sortDir)
            ->paginate($this->perPage)
        ]);
    }
}
