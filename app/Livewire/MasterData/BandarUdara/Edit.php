<?php

namespace App\Livewire\MasterData\BandarUdara;

use App\Livewire\Forms\BandarUdaraEditForm;
use App\Models\BandarUdara;
use Livewire\Component;

class Edit extends Component
{
    public $data;
    public $oldData;
    public BandarUdaraEditForm $form;

    public function mount(BandarUdara $data){
        // if(!$id) {
        //     dd('ID belum ada');
        // }else{
        //     dd($id);
        // }
        // dd($data);
        $this->data = $data; //Initialize model data to variable data
        $this->form->nama_bandara = $data->nama_bandara;
        $this->form->nama_alias = $data->nama_alias;
        $this->form->kode_iata = $data->kode_iata;
        $this->form->lokasi = $data->lokasi;
        $this->form->provinsi = $data->provinsi;
    }

    public function update(){
        $this->form->store($this->data->id);

        session()->flash('status', 'Data Bandara Udara Berhasil Diedit');

        return $this->redirect(route('bandar-udara.index'), navigate: true);
    }
    public function render()
    {
        return view('livewire.master-data.bandar-udara.edit');
    }
}
