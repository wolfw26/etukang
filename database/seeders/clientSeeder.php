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
            'nama' => 'bapak Indra',
            'tgl_lahir' => '1998-05-20',
            'tempat_lahir' => 'Banjarmasin',
            'alamat' => 'Banjarmasin Barat',
            'jk' => 'Laki-laki',
            'no_ktp' => '094889584',
            'foto_ktp' => 'ktpindra.png',
            'no_telp' => '098877667765',
            'no_rek' => '98947788586',
            'users_id' => '4',
        ]);
        Client::create([
            'nama' => 'bu lurah',
            'tgl_lahir' => '1995-01-30',
            'tempat_lahir' => 'Jombang',
            'alamat' => 'denanyar Jombang',
            'jk' => 'Perempuan',
            'no_ktp' => '9095885885',
            'foto_ktp' => 'bulurah.png',
            'no_telp' => '098867885344',
            'no_rek' => '98588388274',
            'users_id' => '5',
        ]);
        Client::create([
            'nama' => 'cak Anto',
            'tgl_lahir' => '1996-05-16',
            'tempat_lahir' => 'Bojonegoro',
            'alamat' => 'kepohbaru bojonegoro',
            'jk' => 'Laki-laki',
            'no_ktp' => '83475888944875',
            'foto_ktp' => 'cakanto.png',
            'no_telp' => '092243778654',
            'no_rek' => '7579489894856',
            'users_id' => '5',
        ]);
    }
}