<?php

namespace Database\Seeders;

use App\Models\DataProyek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dataproyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataProyek::create([
            'nama_data' => 'Kamar Mandi',
            'jumlah' => '2',
            'satuan' => 'bh',
            'proyek_id' => '1',
        ]);
        DataProyek::create([
            'nama_data' => 'Kamar tidur',
            'jumlah' => '4',
            'satuan' => 'bh',
            'proyek_id' => '1',
        ]);
        DataProyek::create([
            'nama_data' => 'ruang tamu',
            'jumlah' => '4',
            'satuan' => 'm2',
            'proyek_id' => '1',
        ]);
        DataProyek::create([
            'nama_data' => 'Kamar Mandi',
            'jumlah' => '1',
            'satuan' => 'bh',
            'proyek_id' => '2',
        ]);
        DataProyek::create([
            'nama_data' => 'Kamar tidur',
            'jumlah' => '4',
            'satuan' => 'bh',
            'proyek_id' => '2',
        ]);
        DataProyek::create([
            'nama_data' => 'ruang tamu',
            'jumlah' => '5',
            'satuan' => 'm2',
            'proyek_id' => '2',
        ]);
        DataProyek::create([
            'nama_data' => 'Kamar Mandi',
            'jumlah' => '2',
            'satuan' => 'bh',
            'proyek_id' => '3',
        ]);
        DataProyek::create([
            'nama_data' => 'Kamar tidur',
            'jumlah' => '3',
            'satuan' => 'bh',
            'proyek_id' => '3',
        ]);
        DataProyek::create([
            'nama_data' => 'ruang tamu',
            'jumlah' => '4',
            'satuan' => 'm2',
            'proyek_id' => '3',
        ]);
    }
}
