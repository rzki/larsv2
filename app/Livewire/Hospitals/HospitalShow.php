<?php

namespace App\Livewire\Hospitals;

use Livewire\Component;
use App\Models\Hospital;

class HospitalShow extends Component
{

    public $hospital, $hospitalId, $no_induk, $nama, $jenis, $kapasitas, $kelas, $unit_instalasi, $no_telp, $email, $nib, $niop, $masa_berlaku, $acc_status, $alamat, $prov_id, $kab_id, $kec_id, $kel_id, $kode_pos, $nama_direktur, $email_direktur, $notelp_direktur, $divisi_direktur;
    public function mount($hospitalId)
    {
        $this->hospital = Hospital::where('hospitalId', $hospitalId)->first();
    }
    public function render()
    {
        return view('livewire.hospitals.hospital-show', [
            'hospitals' => $this->hospital
        ]);
    }
}
