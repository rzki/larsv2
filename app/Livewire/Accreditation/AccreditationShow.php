<?php

namespace App\Livewire\Accreditation;

use Livewire\Component;
use App\Models\Accreditation;
use App\Models\AccreditationBab;
use App\Models\AccreditationStandard;

class AccreditationShow extends Component
{
    public $accId, $acc_id;
    public $bab, $babId; // Bab Akreditasi
    public function mount($acc_id)
    {
        $this->accId = Accreditation::where('acc_id', $acc_id)->first();
        $this->bab = AccreditationBab::get();
    }
    public function render()
    {
        // dd($this->standard);
        return view('livewire.accreditation.accreditation-show',[
            'accreditations' => $this->accId,
            'bab' => $this->bab,
        ]);
    }
}
