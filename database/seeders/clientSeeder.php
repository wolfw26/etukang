<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'nama' => 'Bu Lurah',
            'alamat' => 'Jl.Pembangunan Kota surabaya',
            'jk' => 'Perempuan',
            'no_ktp' => '0001010101002992',
            'no_telp' => '085674556354',
            'users_id' => '2'
        ]);
        Client::create([
            'nama' => 'pak Lurah',
            'alamat' => 'Jl.Pembangunan  surabaya',
            'jk' => 'Laki-laki',
            'no_ktp' => '0001010101002991',
            'no_telp' => '085674556354',
            'users_id' => '3'
        ]);
    }
}
