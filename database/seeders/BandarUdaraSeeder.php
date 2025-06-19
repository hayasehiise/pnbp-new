<?php

namespace Database\Seeders;

use App\Models\BandarUdara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandarUdaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BandarUdara::create([
            'nama_bandara' => 'Mutiara SIS Al-Jufri',
            'nama_alias' => 'PLW',
            'kode_iata' => 'PLW13',
            'lokasi' => 'Kota Palu',
            'provinsi' => 'Sulawesi Tengah',
        ]);

        BandarUdara::create([
            'nama_bandara' => 'Tanjung Api',
            'nama_alias' => 'TJG',
            'kode_iata' => 'TJG10',
            'lokasi' => 'Ampana',
            'provinsi' => 'Sulawesi Tengah',
        ]);
    }
}
