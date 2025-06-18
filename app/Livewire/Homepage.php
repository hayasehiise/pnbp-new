<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage')->title('Homepage');
    }
}
