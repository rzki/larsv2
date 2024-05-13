<?php

namespace App\Livewire\Accreditation\Bab;

use Livewire\Component;
use App\Models\Accreditation;
use App\Models\AccreditationBab;
use App\Models\AccreditationElement;
use App\Models\AccreditationStandard;

class AccreditationBabShow extends Component
{
    public $accId, $acc_id;
    public $babId, $bab_id; // Bab Akreditasi
    public $standard, $standard_id;
    // public $element, $element_id;
    public $sars_manual, $sars_floating, $sars_rounded;
    public function mount($acc_id, $bab_id)
    {
        $this->accId = Accreditation::where('acc_id', $acc_id)->first();
        $this->babId = AccreditationBab::where('babId', $bab_id)->first();
        $this->standard = AccreditationStandard::with('elements')->where('bab_id', $this->babId->id)->get();
        // $this->element = AccreditationElement::where('acc_standard_id', $standard_id)->get();
        // $sars_manual = $this->standard->elements->sum('sars_manual');
    }
    public function render()
    {
        // dd($sars_manual);
        return view('livewire.accreditation.bab.accreditation-bab-show', [
            'accreditations' => $this->accId,
            'bab' => $this->babId,
            'standards' => $this->standard
        ]);
    }
}
