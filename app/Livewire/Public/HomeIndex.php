<?php

namespace App\Livewire\Public;

use Livewire\Component;
use Livewire\Attributes\Layout;

class HomeIndex extends Component
{
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.public.home-index');
    }
}
