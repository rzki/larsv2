<?php

namespace App\Livewire\Roles;

use App\Models\Role;
use Livewire\Component;

class RoleEdit extends Component
{
    public $role, $roleId, $name, $code;
    public function mount($roleId)
    {
        $this->role = Role::where('roleId', $roleId)->first();
        $this->name = $this->role->name;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
        ]);

        Role::where('roleId', $this->roleId)->update([
            'name' => $this->name,
            'code' => strtolower($this->name)
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Role updated successfully!',
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
        return view('livewire.roles.edit');
    }
}
