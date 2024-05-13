<?php

namespace App\Livewire\Roles;

use App\Models\Role;
use Livewire\Component;

class RoleIndex extends Component
{
    public $roleId;
    protected $listeners = ['deleteConfirmed' => 'delete'];

    public function deleteConfirm($roleId){
        $this->roleId = $roleId;
        $this->dispatch('delete-confirmation');
    }
    public function delete()
    {
        $users = Role::where('roleId', $this->roleId)->first();
        $users->delete();

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Role deleted successfully!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 2500,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);
        
        return $this->redirectRoute('roles.index', navigate:true);
    }
    public function render()
    {
        $roles = Role::all();
        return view('livewire.roles.index', compact('roles'));
    }
}
