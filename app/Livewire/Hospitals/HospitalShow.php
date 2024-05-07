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
        // $this->no_induk = $this->hospital->no_induk;
        // $this->nama = $this->hospital->nama;
        // $this->jenis = $this->hospital->jenis;
        // $this->kapasitas = $this->hospital->kapasitas;
        // $this->kelas = $this->hospital->kelas;
        // $this->unit_instalasi = $this->hospital->unit_instalasi;
        // $this->no_telp = $this->hospital->no_telp;
        // $this->email = $this->hospital->email;
        // $this->nib = $this->hospital->nib;
        // $this->niop = $this->hospital->niop;
        // $this->masa_berlaku = $this->hospital->masa_berlaku;
        // $this->acc_status = $this->hospital->acc_status;
        // $this->alamat = $this->hospital->alamat;
        // $this->prov_id = $this->hospital->provinsi->name;
        // $this->kab_id = $this->hospital->kabupaten->name;
        // $this->kec_id = $this->hospital->kecamatan->name;
        // $this->kel_id = $this->hospital->kelurahan->name;
        // $this->kode_pos = $this->hospital->kode_pos;
        // $this->nama_direktur = $this->hospital->nama_direktur;
        // $this->email_direktur = $this->hospital->email_direktur;
        // $this->notelp_direktur = $this->hospital->notelp_direktur;
        // $this->divisi_direktur = $this->hospital->divisi_direktur;
    }
    public function render()
    {
        return view('livewire.hospitals.hospital-show', [
            'hospitals' => $this->hospital
        ]);
    }
}
