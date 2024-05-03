<?php

namespace App\Livewire\Users\Surveyor;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SurveyorCreate extends Component
{
    public $no_induk, $name, $nik, $email, $jabatan, $dinas, $alamat, $prov, $kab, $kec, $kel, $kode_pos, $status, $password;
    public function create()
    {
        $this->validate([
            'no_induk' => 'required',
            'name' => 'required',
            'nik' => 'required',
            'email' => 'required|email',
            'dinas' => 'required',
            // 'jabatan' => 'required',
            // 'alamat' => 'required',
            // 'prov' => 'required',
            // 'kab' => 'required',
            // 'kec' => 'required',
            // 'kel' => 'required',
            // 'kode_pos' => 'required',
            // 'status' => 'required'
        ]);

        User::create([
            'userId' => Str::orderedUuid(),
            'role_id'=> 2,
            'no_induk' => $this->no_induk,
            'name' => $this->name,
            'nik' => $this->nik,
            'email' => $this->email,
            'dinas' => $this->dinas,
            'password' => Hash::make('LARS2024!')
            // 'jabatan' => $this->jabatan,
            // 'alamat' => $this->alamat,
            // 'prov' => $this->provinsi,
            // 'kab' => $this->kabupaten,
            // 'kec' => $this->kecamatan,
            // 'kel' => $this->kelurahan,
            // 'kode_pos' => $this->kode_pos,
            // 'status' => $this->status,
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Surveyor registered successfully!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 3000,
            'showConfirmButton'=> false
        ]);

        return $this->redirectRoute('surveyors.index', navigate:true);
    }
    public function render()
    {
        return view('livewire.users.surveyor.surveyor-create');
    }
}
