<?php

namespace App\Livewire\Hospitals;

use App\Models\Hospital;
use Livewire\Component;
use Livewire\WithPagination;

class HospitalIndex extends Component
{
    use WithPagination;
    public $hospitalId, $tglUpload, $nama, $noInduk, $lokasi, $kelas, $status;
    public $search, $sortBy='created_at', $sortDir='ASC', $perPage=5;
    public $filterStatus='', $filterKelas='';
    protected $listeners = ['deleteConfirmed' => 'delete'];
    public function sort($sortByField)
    {
        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $sortByField;
    }
    public function deleteConfirm($hospitalId){
        $this->hospitalId = $hospitalId;
        $this->dispatch('delete-confirmation');
    }
    public function delete()
    {
        $hospitals = Hospital::where('hospitalId', $this->hospitalId)->first();
        $hospitals->delete();

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Data Rumah Sakit berhasil dihapus!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 2500,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);
        return $this->redirectRoute('hospitals.index', navigate:true);
    }
    public function render()
    {
        return view('livewire.hospitals.hospital-index',[
            'hospitals' => Hospital::search($this->search)
            ->when($this->filterKelas !== '', function($query){
                $query->where('kelas', $this->filterKelas);
            })
            ->when($this->filterStatus !== '', function($query){
                $query->where('acc_status', $this->filterStatus);
            })
            ->orderBy($this->sortBy,$this->sortDir)
            ->paginate($this->perPage)
        ]);
    }
}
