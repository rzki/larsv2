<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Accreditation;
use Livewire\Attributes\Layout;

class HomeIndex extends Component
{
    // public $pengajuan_akreditasi, $total_akreditasi;
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.public.home-index', [
            'total_akreditasi' => Accreditation::count()
        ]);
    }
}
