<?php

namespace App\Livewire\Roles;

use App\Models\Role;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RoleCreate extends Component
{
    public $roleId, $name, $code;
    public function create()
    {
        $this->validate([
            'name'  => 'required'
        ]);

        Role::create([
            'roleId'    => Str::orderedUuid(),
            'name'      => $this->name,
            'code'      => strtolower($this->name)
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Role created successfully!',
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
        return view('livewire.roles.create');
    }
}
