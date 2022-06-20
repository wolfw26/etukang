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
            'nama_proyek' => 'Pembangunan Rumah',
            'alamat' => 'Jl. Soutoyo S gg bina bahari no 13',
            'tanggal_proyek' => '2020-12-20',
            'tanggal_selesai' => '2022-12-20',
            'client_id' => '1',
            'tukang_id' => '1'
        ]);
        Proyek::create([
            'nama_proyek' => 'Pembangunan Rumah',
            'alamat' => 'Jl. Soutoyo S gg bina bahari no 13',
            'tanggal_proyek' => '2020-12-20',
            'tanggal_selesai' => '2022-12-20',
            'client_id' => '2',
            'tukang_id' => '1'
        ]);
    }
}
