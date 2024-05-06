<?php

namespace App\Livewire\Hospitals;

use Livewire\Component;
use App\Models\Hospital;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Str;

class HospitalCreate extends Component
{
    public $hospitalId, $no_induk, $nama, $jenis, $kapasitas, $kelas, $unit_instalasi, $no_telp, $email, $nib, $niop, $masa_berlaku, $acc_status;
    public $provinsi, $kabupaten, $kecamatan, $kelurahan;
    public $alamat, $prov_id, $kab_id, $kec_id, $kel_id, $kode_pos;
    public $nama_direktur, $email_direktur, $notelp_direktur, $divisi_direktur;
    public function create()
    {
        Hospital::create([
            'hospitalId'    => Str::orderedUuid(),
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
            'title' => 'Data Rumah Sakit berhasil ditambahkan!',
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

        return view('livewire.hospitals.hospital-create', [
            'provinsi' => $this->provinsi,
            'kabupaten' => $this->kabupaten,
            'kecamatan' => $this->kecamatan,
            'kelurahan' => $this->kelurahan,
        ]);
    }
}
