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
            'no_telp' => '098877667765',
            'users_id' => '4',
        ]);
        Client::create([
            'nama' => 'bu lurah',
            'tgl_lahir' => '1995-01-30',
            'tempat_lahir' => 'Jombang',
            'alamat' => 'denanyar Jombang',
            'jk' => 'Perempuan',
            'no_ktp' => '9095885885',
            'no_telp' => '098867885344',

            'users_id' => '5',
        ]);
        Client::create([
            'nama' => 'cak Anto',
            'tgl_lahir' => '1996-05-16',
            'tempat_lahir' => 'Bojonegoro',
            'alamat' => 'kepohbaru bojonegoro',
            'jk' => 'Laki-laki',
            'no_ktp' => '83475888944875',
            'no_telp' => '092243778654',

            'users_id' => '5',
        ]);
    }
}
