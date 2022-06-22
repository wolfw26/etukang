<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class materialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'nama_material' => 'Pasir',
            'satuan' => 'kubik',
            'harga_satuan' => 70000,
            'jumlah' => 2,
            'jumlah_harga' => 140000,
            'proyek_id' => 1
        ]);
        Material::create([
            'nama_material' => 'semen',
            'satuan' => 'karung',
            'harga_satuan' => 50000,
            'jumlah' => 4,
            'jumlah_harga' => 200000,
            'proyek_id' => 1
        ]);
        Material::create([
            'nama_material' => 'bata',
            'satuan' => 'biji',
            'harga_satuan' => 2000,
            'jumlah' => 100,
            'jumlah_harga' => 200000,
            'proyek_id' => 1
        ]);
        Material::create([
            'nama_material' => 'Pasir',
            'satuan' => 'kubik',
            'harga_satuan' => 70000,
            'jumlah' => 2,
            'jumlah_harga' => 140000,
            'proyek_id' => 2
        ]);
        Material::create([
            'nama_material' => 'semen',
            'satuan' => 'karung',
            'harga_satuan' => 50000,
            'jumlah' => 4,
            'jumlah_harga' => 200000,
            'proyek_id' => 2
        ]);
        Material::create([
            'nama_material' => 'bata',
            'satuan' => 'biji',
            'harga_satuan' => 2000,
            'jumlah' => 100,
            'jumlah_harga' => 200000,
            'proyek_id' => 2
        ]);
    }
}
