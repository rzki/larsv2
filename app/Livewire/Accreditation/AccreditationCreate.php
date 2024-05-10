<?php

namespace App\Livewire\Accreditation;

use Livewire\Component;
use App\Models\Hospital;
use Illuminate\Support\Str;
use App\Models\Accreditation;

class AccreditationCreate extends Component
{
    public $hospital, $hospital_id, $namaRS, $deskripsi, $no_akreditasi, $lokasi, $mulai, $selesai, $status, $hasil;
    public function mount()
    {
        $this->hospital = Hospital::get();
        // $this->lokasi = Hospital::where('hospitalId', $this->hospital_id)->pluck('');
        // $this->lokasi = $this->hospital->nama;
    }
    public function create()
    {
        Accreditation::create([
            'acc_id' => Str::orderedUuid(),
            'hospital_id' => $this->hospital_id,
            'deskripsi' => $this->deskripsi,
            'no_akreditasi' => $this->no_akreditasi,
            'lokasi' => $this->lokasi,
            'tgl_mulai' => $this->mulai,
            'tgl_selesai' => $this->selesai,
            'status' => $this->status,
            'hasil' => $this->hasil
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Data Akreditasi berhasil ditambahkan!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 3000,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);
        return $this->redirectRoute('accreditations.index', navigate:true);

    }
    public function render()
    {
        // $namaRS = $this->lokasi->nama;
        // dd ($this->hospital);
        return view('livewire.accreditation.accreditation-create', [
            'hospital' => $this->hospital,
            // 'lokasi' => $this->lokasi
        ]);
    }
}
