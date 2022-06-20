<?php

namespace Database\Seeders;

use App\Models\Pekerja;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class pekerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pekerja::create([
            'nama_pekerja' => 'irwansyah',
            'tukang_id' => '1',
            'alamat' => 'Banjarmasin',
            'foto_ktp' => 'irwansayh.png',
        ]);
        Pekerja::create([
            'nama_pekerja' => 'arip',
            'tukang_id' => '1',
            'alamat' => 'Banjarmasin',
            'foto_ktp' => 'arip.png',
        ]);
        Pekerja::create([
            'nama_pekerja' => 'rio',
            'tukang_id' => '1',
            'alamat' => 'Banjarmasin',
            'foto_ktp' => 'rio.png',
        ]);
        Pekerja::create([
            'nama_pekerja' => 'hendra',
            'tukang_id' => '2',
            'alamat' => 'Banjarmasin',
            'foto_ktp' => 'hendra.png',
        ]);
        Pekerja::create([
            'nama_pekerja' => 'andre',
            'tukang_id' => '2',
            'alamat' => 'Banjarmasin',
            'foto_ktp' => 'andre.png',
        ]);
        Pekerja::create([
            'nama_pekerja' => 'lukman',
            'tukang_id' => '2',
            'alamat' => 'Banjarmasin',
            'foto_ktp' => 'lukman.png',
        ]);
    }
}
