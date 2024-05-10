<?php

namespace App\Livewire\Accreditation;

use App\Models\Accreditation;
use Livewire\Component;
use Livewire\WithPagination;

class AccreditationIndex extends Component
{
    use WithPagination;
    public $accreditation, $acc_id;

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

    public function deleteConfirm($acc_id)
    {
        $this->acc_id = $acc_id;
        $this->dispatch('delete-confirmation');
    }

    public function delete()
    {
        $accreditations = Accreditation::where('acc_id', $this->acc_id)->first();
        $accreditations->delete();

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Data Akreditasi berhasil dihapus!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 2500,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);
        return $this->redirectRoute('accreditations.index', navigate:true);
    }

    public function render()
    {
        return view('livewire.accreditation.accreditation-index',[
            'accreditations' => Accreditation::search($this->search)
            ->orderBy($this->sortBy,$this->sortDir)
            ->paginate($this->perPage)
        ]);
    }
}
