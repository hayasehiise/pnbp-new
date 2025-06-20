<?php

namespace App\Livewire\MasterData\BandarUdara;

use App\Livewire\Forms\BandaraUdaraAddForm;
use Livewire\Component;

class Add extends Component
{
    public BandaraUdaraAddForm $form;

    public function capitalEachWord(){

    }

    public function save(){
        $this->form->store();

        session()->flash('status', 'Data Bandara Udara Berhasil Ditambahkan');

        return $this->redirect(route('bandar-udara.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.master-data.bandar-udara.add');
    }
}
