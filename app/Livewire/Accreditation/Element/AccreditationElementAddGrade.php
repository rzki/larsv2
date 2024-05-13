<?php

namespace App\Livewire\Accreditation\Element;

use Livewire\Component;
use App\Models\Accreditation;
use App\Models\AccreditationBab;
use App\Models\AccreditationElement;
use App\Models\AccreditationStandard;

class AccreditationElementAddGrade extends Component
{
    public $accId, $acc_id;
    public $babId, $bab_id;
    public $standard, $standard_id;
    public $element, $element_id;
    public $manual, $floating, $rounded;
    public function mount($acc_id, $bab_id, $standard_id, $element_id)
    {
        $this->accId = Accreditation::where('acc_id', $acc_id)->first();
        $this->babId = AccreditationBab::where('babId', $bab_id)->first();
        $this->standard = AccreditationStandard::where('standardId', $standard_id)->first();
        $this->element = AccreditationElement::where('elementId', $element_id)->first();
        $this->manual = $this->element->sars_manual;
        $this->floating = $this->element->sars_floating;
        $this->rounded = $this->element->sars_rounded;
    }
    public function update()
    {
        AccreditationElement::where('elementId', $this->element_id)->update([
            'elementId' => $this->element->elementId,
            'deskripsi' => $this->element->deskripsi,
            'acc_standard_id' => $this->element->acc_standard_id,
            'sars_manual' => $this->manual,
            'sars_floating' => $this->floating,
            'sars_rounded' => $this->rounded,
            'evaluator_id' => auth()->user()->id
        ]);
        // dd($this->bab_id);
        return $this->redirectRoute('accreditations.standard.show',
            ['acc_id' => $this->acc_id,
            'bab_id' => $this->bab_id,
            'standard_id' => $this->standard_id]
            , navigate:true);
    }
    public function render()
    {
        return view('livewire.accreditation.element.accreditation-element-add-grade', [
            'accreditations' => $this->accId,
            'bab' => $this->babId,
            'standards' => $this->standard,
            'elements' => $this->element
        ]);
    }
}
