<?php

namespace App\Livewire\Public;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Hospital;
use Illuminate\Support\Str;
use App\Models\Accreditation;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class AccreditationRegister extends Component
{
    use WithFileUploads;

    public $rs, $nirs, $nama, $nama_direktur, $alamat, $no_hp, $email;
    #[Validate('max:10240|mime:pdf')]
    public $surat_permohonan, $nama_file, $ekstensi_file;

    public function register()
    {
        if($this->surat_permohonan == null){
            $this->rs = Hospital::create([
                'hospitalId' => Str::orderedUuid(),
                'no_induk' => $this->nirs,
                'nama' => $this->nama,
                'nama_direktur' => $this->nama_direktur,
                'alamat' => $this->alamat,
                'no_telp' => $this->no_hp,
                'email' => $this->email,
            ]);
            Accreditation::create([
                'acc_id' => Str::orderedUuid(),
                'hospital_id' => $this->rs->id,
                'deskripsi' => 'Akreditasi '.$this->rs->nama.' '.date('Y'),
                'no_akreditasi' => 'LARS-'.$this->rs->no_induk.'-'.date('mY'),
                'lokasi' => null,
                'tgl_mulai' => null,
                'tgl_selesai' => null,
                'surat_permohonan' => null,
                'status' => 'Diajukan',
                'hasil' => 'Tidak Terakreditasi'
            ]);
        }else{
            $this->ekstensi_file = $this->surat_permohonan->getClientOriginalExtension();
            $this->nama_file = 'Surat Permohonan '.$this->nama.'.'.$this->ekstensi_file;
            $this->rs = Hospital::create([
                'hospitalId' => Str::orderedUuid(),
                'no_induk' => $this->nirs,
                'nama' => $this->nama,
                'nama_direktur' => $this->nama_direktur,
                'alamat' => $this->alamat,
                'no_telp' => $this->no_hp,
                'email' => $this->email,
            ]);
            Accreditation::create([
                'acc_id' => Str::orderedUuid(),
                'hospital_id' => $this->rs->id,
                'deskripsi' => 'Akreditasi '.$this->rs->nama.' '.date('Y'),
                'no_akreditasi' => 'LARS-'.$this->rs->no_induk.'-'.date('mY'),
                'lokasi' => null,
                'tgl_mulai' => null,
                'tgl_selesai' => null,
                'surat_permohonan' => $this->surat_permohonan,
                'status' => 'Diajukan',
                'hasil' => 'Tidak Terakreditasi'
            ]);
        };
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Pendaftaran Rumah Sakit berhasil!',
            'toast'=> false,
            'position'=> 'center',
            'timer'=> 3000,
            'progbar' => false,
            'showConfirmButton'=> false
        ]);
        return $this->redirectRoute('daftar-akreditasi', navigate:true);
    }
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.public.accreditation-register');
    }
}
