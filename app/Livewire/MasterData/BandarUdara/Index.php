<?php

namespace App\Livewire\MasterData\BandarUdara;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.master-data.bandar-udara.index', ['master_menu' => 'open']);
    }
}
