<?php

namespace App\Livewire\Accreditation\Standard;

use Livewire\Component;
use App\Models\Accreditation;
use App\Models\AccreditationBab;
use App\Models\AccreditationElement;
use App\Models\AccreditationStandard;

class AccreditationStandardShow extends Component
{
    public $accId, $acc_id;
    public $babId, $bab_id;
    public $standard, $standard_id;
    public $element, $element_id;
    public function mount($acc_id, $bab_id, $standard_id)
    {
        $this->accId = Accreditation::where('acc_id', $acc_id)->first();
        $this->babId = AccreditationBab::where('babId', $bab_id)->first();
        $this->standard = AccreditationStandard::where('standardId', $standard_id)->first();
        $this->element = AccreditationElement::where('acc_standard_id', $this->standard->id)->get();
    }
    public function render()
    {
        // dd($this->standard);
        return view('livewire.accreditation.standard.accreditation-standard-show', [
            'accreditations' => $this->accId,
            'bab' => $this->babId,
            'standards' => $this->standard,
            'elements' => $this->element
        ]);
    }
}
