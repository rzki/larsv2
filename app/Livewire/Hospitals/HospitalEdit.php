<?php

namespace App\Livewire\Hospitals;

use Livewire\Component;
use App\Models\Hospital;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class HospitalEdit extends Component
{
    public $hospital, $hospitalId, $provinsi, $kabupaten, $kecamatan, $kelurahan;
    public $no_induk, $nama, $jenis, $kapasitas, $kelas, $unit_instalasi, $no_telp, $email, $nib, $niop, $masa_berlaku, $acc_status, $alamat, $prov_id, $kab_id, $kec_id, $kel_id, $kode_pos, $nama_direktur, $email_direktur, $notelp_direktur, $divisi_direktur;
    public function mount($hospitalId)
    {
        $this->hospital = Hospital::where('hospitalId', $hospitalId)->first();
        $this->no_induk = $this->hospital->no_induk;
        $this->nama = $this->hospital->nama;
        $this->jenis = $this->hospital->jenis;
        $this->kapasitas = $this->hospital->kapasitas;
        $this->kelas = $this->hospital->kelas;
        $this->unit_instalasi = $this->hospital->unit_instalasi;
        $this->no_telp = $this->hospital->no_telp;
        $this->email = $this->hospital->email;
        $this->nib = $this->hospital->nib;
        $this->niop = $this->hospital->niop;
        $this->masa_berlaku = $this->hospital->masa_berlaku;
        $this->acc_status = $this->hospital->acc_status;
        $this->alamat = $this->hospital->alamat;
        $this->prov_id = $this->hospital->prov_id;
        $this->kab_id = $this->hospital->kab_id;
        $this->kec_id = $this->hospital->kec_id;
        $this->kel_id = $this->hospital->kel_id;
        $this->kode_pos = $this->hospital->kode_pos;
        $this->nama_direktur = $this->hospital->nama_direktur;
        $this->email_direktur = $this->hospital->email_direktur;
        $this->notelp_direktur = $this->hospital->notelp_direktur;
        $this->divisi_direktur = $this->hospital->divisi_direktur;
    }
    public function update()
    {
        Hospital::where('hospitalId', $this->hospitalId)->update([
            'no_induk'      => $this->no_induk,
            'nama'          => $this->nama,
            'jenis'         => $this->jenis,
            'kapasitas'     => $this->kapasitas,
            'kelas'         => $this->kelas,
            'unit_instalasi'=> $this->unit_instalasi,
            'no_telp'       => $this->no_telp,
            'email'         => $this->email,
            'nib'           => $this->nib,
            'niop'          => $this->niop,
            'masa_berlaku'  => $this->masa_berlaku,
            'acc_status'    => $this->acc_status,
            'alamat'        => $this->alamat,
            'prov_id'       => $this->prov_id,
            'kab_id'        => $this->kab_id,
            'kec_id'        => $this->kec_id,
            'kel_id'        => $this->kel_id,
            'kode_pos'      => $this->kode_pos,
            'nama_direktur' => $this->nama_direktur,
            'email_direktur' => $this->email_direktur,
            'notelp_direktur' => $this->notelp_direktur,
            'divisi_direktur' => $this->divisi_direktur,
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Data Rumah Sakit berhasil diperbarui!',
            'toast'=> true,
            'position'=> 'top-end',
            'timer'=> 3000,
            'progbar' => true,
            'showConfirmButton'=> false
        ]);
        return $this->redirectRoute('hospitals.index', navigate:true);
    }
    public function render()
    {
        $this->provinsi = Provinsi::get();
        $this->kabupaten = Kabupaten::where('provinsi_id', $this->prov_id)->get();
        $this->kecamatan = Kecamatan::where('kabupaten_id', $this->kab_id)->get();
        $this->kelurahan = Kelurahan::where('kecamatan_id', $this->kec_id)->get();
        return view('livewire.hospitals.hospital-edit');
    }
}
