<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\AccreditationBab;
use App\Models\AccreditationElement;
use App\Models\AccreditationStandard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccreditationBab::create([
            'babId' => Str::orderedUuid(),
            'nama' => 'Tata Kelola Rumah Sakit',
            'kode' => 'TKRS',
        ]);

        AccreditationStandard::create([
            'standardId' => Str::orderedUuid(),
            'nama' => 'TKRS 1',
            'bab_id' => 1,
        ]);

        $element = [
            [
                'elementId' => Str::orderedUuid(),
                'deskripsi' => 'Representatif pemilik / Dewan Pengawas dipilih dan ditetapkan oleh Pemilik',
                'acc_standard_id' => 1,
            ],
            [
                'elementId' => Str::orderedUuid(),
                'deskripsi' => 'Tanggung jawab dan wewenang representasi pemilik meliputi poin a) sampai dengan h) yang tertera di dalam maksud dan tujuan serta dijelaskan di dalam peraturan internal rumah sakit',
                'acc_standard_id' => 1,
            ],
            [
                'elementId' => Str::orderedUuid(),
                'deskripsi' => 'Representasi pemilik/Dewan Pengawas di evaluasi oleh pemilik setiap tahun dan hasil evaluasinya didokumentasikan',
                'acc_standard_id' => 1,
            ],
            [
                'elementId' => Str::orderedUuid(),
                'deskripsi' => 'Representasi pemilik/Dewan Pengawas menetapkan visi misi rumah sakit yang diarahkan oleh pemilik',
                'acc_standard_id' => 1,
            ],
        ];

        foreach($element as $el){
            AccreditationElement::create($el);
        }
    }
}
