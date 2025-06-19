<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    // public $isMasteData;
    // public $masterDataMenu;
    // public function mount() {
    //     $this->isMasteData = request()->is("master-data*");

    //     if($this->isMasteData) {
    //         $this->masterDataMenu = "open";
    //     } else {
    //         $this->masterDataMenu = "";
    //     }
    // }
    public function render()
    {
        return view('livewire.components.sidebar', [
            'currentActive' => request(),
        ]);
    }
}
