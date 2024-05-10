<?php

namespace App\Livewire\Accreditation;

use Livewire\Component;
use App\Models\Accreditation;

class AccreditationShow extends Component
{
    public $accId, $acc_id;
    public function mount($acc_id)
    {
        $this->accId = Accreditation::where('acc_id', $acc_id)->first();
    }
    public function render()
    {
        // dd($this->accId);
        return view('livewire.accreditation.accreditation-show',[
            'accreditations' => $this->accId
        ]);
    }
}
