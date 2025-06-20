<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\BandarUdara;
use Livewire\Attributes\Validate;

class BandarUdaraEditForm extends Form
{
    #[Validate('required')]
    public $nama_bandara = '';
    #[Validate('required')]
    public $nama_alias = '';
    #[Validate('required')]
    public $kode_iata = '';
    #[Validate('required')]
    public $lokasi = '';
    #[Validate('required')]
    public $provinsi = '';

    public function store($dataId){
        $this->validate();
        $this->nama_bandara = ucwords(strtolower($this->nama_bandara));
        $this->nama_alias = ucwords(strtolower($this->nama_alias));
        $this->kode_iata = strtoupper($this->kode_iata);
        $this->lokasi = ucwords(strtolower($this->lokasi));
        $this->provinsi = ucwords(strtolower($this->provinsi));
        BandarUdara::find($dataId)->update([
            "nama_bandara" => $this->nama_bandara,
            "nama_alias" => $this->nama_alias,
            "kode_iata" => $this->kode_iata,
            "lokasi" => $this->lokasi,
            "provinsi" => $this->provinsi,
        ]);
    }
}
