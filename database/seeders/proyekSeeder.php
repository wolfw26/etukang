<?php

namespace Database\Seeders;

use App\Models\Proyek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class proyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proyek::create([
            'nama_proyek' => 'Pembangunan rumah 2 lantai',
            'jenis_proyek' => 'Pembangunan',
            'alamat' => 'Jl. Soetoyo S ',
            'luas_tanah' => '10 x 12',
            'panjang_rumah' => '6',
            'lebar_rumah' => '6',
            'satuan' => 'M2',
            'status' => 'perencanaan',
            'tukang_id' => '1',
            'client_id' => '1',
        ]);

        // Proyek::create([
        //     'nama_proyek' => 'Pembangunan rumah ',
        //     'jenis_proyek' => 'Pembangunan',
        //     'alamat' => 'Jl. Babat-Jombang  ',
        //     'luas_tanah' => '10 x 12',
        //     'panjang_rumah' => '6',
        //     'lebar_rumah' => '6',
        //     'satuan' => 'M2',
        //     'status' => 'berjalan',
        //     'tukang_id' => '1',
        //     'client_id' => '2',
        // ]);
        // Proyek::create([
        //     'nama_proyek' => 'Pembangunan rumah ',
        //     'jenis_proyek' => 'Pembangunan',
        //     'alamat' => 'Jl. Babat-Bojonegoro  ',
        //     'luas_tanah' => '10 x 12',
        //     'panjang_rumah' => '6',
        //     'lebar_rumah' => '6',
        //     'satuan' => 'M2',
        //     'status' => 'perencanaan',
        //     'tukang_id' => '2',
        //     'client_id' => '3',
        // ]);
    }
}
