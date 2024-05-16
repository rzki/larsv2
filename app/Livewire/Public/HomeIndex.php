<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Accreditation;
use Livewire\Attributes\Layout;

class HomeIndex extends Component
{
    public $total_akreditasi, $pengajuan_akreditasi;
    // public $pengajuan_akreditasi, $total_akreditasi;
    #[Layout('components.layouts.public')]
    public function render()
    {
        $this->total_akreditasi = Accreditation::count();
        $this->pengajuan_akreditasi = Accreditation::where('status', '=', 'Diajukan')->count();
        return view('livewire.public.home-index', [
            'total_akreditasi' => $this->total_akreditasi,
            'pengajuan_akreditasi' => $this->pengajuan_akreditasi
        ]);
    }
}
