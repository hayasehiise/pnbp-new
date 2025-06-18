<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    public $master_menu = '';
    public $menu = '';
    protected $listener = [
        'menuResult' => 'openMenu',
    ];

    public function menuOpen($master_menu) {
        $this->$menu = $master_menu;
    }

    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
