<?php

namespace App\Livewire\Users\Surveyors;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class SurveyorEdit extends Component
{
    public $surveyor, $surveyorId, $no_induk, $name, $nik, $email, $jabatan, $dinas, $alamat, $prov, $kab, $kec, $kel, $kode_pos, $status;
    public function mount($surveyorId)
    {
        $this->surveyor = User::where([
            ['role_id', '=', 2],
            ['userId', $surveyorId],
            ])->first();
        $this->no_induk     = $this->surveyor->no_induk;
        $this->name         = $this->surveyor->name;
        $this->nik          = $this->surveyor->nik;
        $this->email        = $this->surveyor->email;
        $this->jabatan      = $this->surveyor->jabatan;
        $this->dinas        = $this->surveyor->dinas;
        $this->alamat       = $this->surveyor->alamat;
    }
    public function update()
    {
        // $this->validate([
        //     'no_induk' => 'required',
        //     'name' => 'required',
        //     'nik' => 'required',
        //     'email' => 'required|email',
        //     'dinas' => 'required',
        //     // 'jabatan' => 'required',
        //     // 'alamat' => 'required',
        //     // 'prov' => 'required',
        //     // 'kab' => 'required',
        //     // 'kec' => 'required',
        //     // 'kel' => 'required',
        //     // 'kode_pos' => 'required',
        //     // 'status' => 'required'
        // ]);

        User::where('userId', $this->surveyorId)->update([
            'no_induk' => $this->no_induk,
            'name' => $this->name,
            'nik' => $this->nik,
            'email' => $this->email,
            'dinas' => $this->dinas,
            'jabatan' => $this->jabatan,
            'alamat' => $this->alamat,
            'prov' => $this->prov,
            'kab' => $this->kab,
            'kec' => $this->kec,
            'kel' => $this->kel,
            'kode_pos' => $this->kode_pos,
            'status' => $this->status,
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Surveyor updated successfully!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 3000,
            'showConfirmButton'=> false
        ]);

        return $this->redirectRoute('surveyors.index', navigate:true);
    }
    public function render()
    {
        return view('livewire.users.surveyor.surveyor-edit');
    }
}
