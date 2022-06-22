<?php

namespace Database\Seeders;

use App\Models\tukang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tukangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tukang::create([
            'nama' => 'Abdul latif',
            'alamat' => 'Jl. Babat - Jombang',
            'no_ktp' => '0199286547737',
            'foto_ktp' => 'abdul_latif.png',
            'jk' => 'Laki-laki',
            'no_telp' => '087566352234'
        ]);
        Tukang::create([
            'nama' => 'Iqbal al makmur',
            'alamat' => 'Jl. Babat - Bojonegoro',
            'no_ktp' => '0199286547644',
            'foto_ktp' => 'iqbal.png',
            'jk' => 'Laki-laki',
            'no_telp' => '098876774342'
        ]);
    }
}
