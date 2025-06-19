<?php

namespace App\Livewire\Forms;

use App\Models\BandarUdara;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BandaraUdaraAddForm extends Form
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

    public function store(){
        $this->validate();
        BandarUdara::create($this->all());
    }
}
