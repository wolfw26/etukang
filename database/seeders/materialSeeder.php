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
            'kode_material' => 'P.2.5',
            'nama_material' => 'Paku 2-5 Inchi',
            'satuan' => 'doz',
            'harga_satuan' => 31200,
        ]);
        Material::create([
            'kode_material' => 'P.1.1',
            'nama_material' => 'Paku Biasa 2-5 Inchi',
            'satuan' => 'doz',
            'harga_satuan' => 31200,
        ]);
        Material::create([
            'kode_material' => 'K.MU.2',
            'nama_material' => 'Kayu Meranti Usuk 4/6, 7/7',
            'satuan' => 'm3',
            'harga_satuan' => 4355500,
        ]);
        Material::create([
            'kode_material' => 'K.MU.1',
            'nama_material' => 'Kayu Meranti Usuk 4/6, 5/7',
            'satuan' => 'm3',
            'harga_satuan' => 4355500,
        ]);
        Material::create([
            'kode_material' => 'K.MP.1',
            'nama_material' => 'Kayu Meranti Papan 2/20, 4/10',
            'satuan' => 'm3',
            'harga_satuan' => 4355500,
        ]);
        Material::create([
            'kode_material' => 'K.MB.1',
            'nama_material' => 'Kayu Meranti Bekesting',
            'satuan' => 'm3',
            'harga_satuan' => 3484400,
        ]);
        Material::create([
            'kode_material' => 'S.PC.1',
            'nama_material' => 'Semen PC 50 Kg',
            'satuan' => 'zak',
            'harga_satuan' => 73000,
        ]);
        Material::create([
            'kode_material' => 'P.C.1',
            'nama_material' => 'Pasir Cor',
            'satuan' => 'm3',
            'harga_satuan' => 260000,
        ]);
        Material::create([
            'kode_material' => 'P.U.1',
            'nama_material' => 'Pasir Urug',
            'satuan' => 'm3',
            'harga_satuan' => 187200,
        ]);
        Material::create([
            'kode_material' => 'B.1',
            'nama_material' => 'Batu Pecah 2/3 cm',
            'satuan' => 'm3',
            'harga_satuan' => 291200,
        ]);
        Material::create([
            'kode_material' => 'K.D.0',
            'nama_material' => 'Kawat Duri',
            'satuan' => 'Roll',
            'harga_satuan' => 73700,
        ]);
        Material::create([
            'kode_material' => 'SI.1',
            'nama_material' => 'Sirtu',
            'satuan' => 'm3',
            'harga_satuan' => 169800,
        ]);
        Material::create([
            'kode_material' => 'T.0.1',
            'nama_material' => 'Tanah Katel',
            'satuan' => 'm3',
            'harga_satuan' => 130000,
        ]);
        Material::create([
            'kode_material' => 'KP.1',
            'nama_material' => 'Kapur Pasang',
            'satuan' => 'm3',
            'harga_satuan' => 114400,
        ]);
        Material::create([
            'kode_material' => 'A.1',
            'nama_material' => 'Abu Batu',
            'satuan' => 'm3',
            'harga_satuan' => 182000,
        ]);
    }
}
