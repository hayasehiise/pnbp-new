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
        for ($i = 1; $i <= 10; $i++){
            BandarUdara::create([
            'nama_bandara' => 'Mutiara SIS Al-Jufri',
            'nama_alias' => 'PLW',
            'kode_iata' => 'PLW'.$i,
            'lokasi' => 'Kota Palu',
            'provinsi' => 'Sulawesi Tengah',
        ]);
        }
    }
}
