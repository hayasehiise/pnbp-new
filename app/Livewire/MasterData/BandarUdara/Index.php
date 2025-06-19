<?php

namespace App\Livewire\MasterData\BandarUdara;

use App\Models\BandarUdara;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $bandaraUdaraData = BandarUdara::latest()->paginate(5);
        return view('livewire.master-data.bandar-udara.index', [
            'data' => $bandaraUdaraData,
        ]);
    }
}
