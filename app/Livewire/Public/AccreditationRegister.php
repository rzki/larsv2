<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Hospital;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class AccreditationRegister extends Component
{
    use WithFileUploads;

    public $nirs, $nama, $nama_direktur, $alamat, $no_hp, $email;
    #[Validate('max:10240|mime:pdf')]
    public $surat_permohonan, $nama_file, $ekstensi_file;

    public function register()
    {
        if($this->surat_permohonan == null){
            Hospital::create([
                'hospitalId' => Str::orderedUuid(),
                'no_induk' => $this->nirs,
                'nama' => $this->nama,
                'nama_direktur' => $this->nama_direktur,
                'alamat' => $this->alamat,
                'no_telp' => $this->no_hp,
                'email' => $this->email,
            ]);
        }else{
            $this->ekstensi_file = $this->surat_permohonan->getClientOriginalExtension();
            $this->nama_file = 'Surat Permohonan '.$this->nama.'.'.$this->ekstensi_file;
            Hospital::create([
                'hospitalId' => Str::orderedUuid(),
                'no_induk' => $this->nirs,
                'nama' => $this->nama,
                'nama_direktur' => $this->nama_direktur,
                'alamat' => $this->alamat,
                'no_telp' => $this->no_hp,
                'email' => $this->email,
                'surat_permohonan' => $this->surat_permohonan
            ]);
        };
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Pendaftaran Rumah Sakit berhasil!',
            'toast'=> false,
            'position'=> 'top-end',
            'timer'=> 3000,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);
    }
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.public.accreditation-register');
    }
}
