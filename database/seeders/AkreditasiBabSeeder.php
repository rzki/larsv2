<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\AccreditationBab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkreditasiBabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccreditationBab::create([
            'babId' => Str::orderedUuid(),
            'nama' => 'Tata Kelola Rumah Sakit',
            'kode' => 'TKRS'
        ]);
    }
}
