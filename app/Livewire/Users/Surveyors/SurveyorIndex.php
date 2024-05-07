<?php

namespace App\Livewire\Users\Surveyors;

use App\Models\User;
use Livewire\Component;

class SurveyorIndex extends Component
{
    public $surveyorId;
    public $search, $sortBy='created_at', $sortDir='ASC', $perPage=5;
    protected $listeners = ['deleteConfirmed' => 'delete'];
    public function sort($sortByField)
    {
        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $sortByField;
    }
    public function deleteConfirm($surveyorId){
        $this->surveyorId = $surveyorId;
        $this->dispatch('delete-confirmation');
    }
    public function delete()
    {
        $users = User::where('userId', $this->surveyorId)->first();
        $users->delete();

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Surveyor deleted successfully!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 2500,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);
        return $this->redirectRoute('surveyors.index', navigate:true);
    }
    public function render()
    {
        // $surveyors = User::where('role_id', '=', 2)->get();
        return view('livewire.users.surveyor.surveyor-index', [
            'surveyors' => User::where('role_id', '=', 2)
            ->search($this->search)
            ->orderBy($this->sortBy,$this->sortDir)
            ->paginate($this->perPage)
        ]);
    }
}
