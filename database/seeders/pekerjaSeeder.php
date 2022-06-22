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
            'jenis_kelamin' => 'laki-laki',
            'foto_ktp' => 'irwansayh.png',
            'no_telp' => '098876775465',
            'image' => ''
        ]);
        Pekerja::create([
            'nama_pekerja' => 'arip',
            'tukang_id' => '1',
            'alamat' => 'Banjarmasin',
            'jenis_kelamin' => 'laki-laki',
            'foto_ktp' => 'arip.png',
            'no_telp' => '098870775465',
            'image' => ''
        ]);
        Pekerja::create([
            'nama_pekerja' => 'rio',
            'tukang_id' => '1',
            'alamat' => 'Banjarmasin',
            'jenis_kelamin' => 'laki-laki',
            'foto_ktp' => 'rio.png',
            'no_telp' => '0988767700965',
            'image' => ''
        ]);
        Pekerja::create([
            'nama_pekerja' => 'hendra',
            'tukang_id' => '2',
            'alamat' => 'Banjarmasin',
            'jenis_kelamin' => 'laki-laki',
            'foto_ktp' => 'hendra.png',
            'no_telp' => '098346775465',
            'image' => ''
        ]);
        Pekerja::create([
            'nama_pekerja' => 'andre',
            'tukang_id' => '2',
            'alamat' => 'Banjarmasin',
            'jenis_kelamin' => 'laki-laki',
            'foto_ktp' => 'andre.png',
            'no_telp' => '098870064465',
            'image' => ''
        ]);
        Pekerja::create([
            'nama_pekerja' => 'lukman',
            'tukang_id' => '2',
            'alamat' => 'Banjarmasin',
            'jenis_kelamin' => 'laki-laki',
            'foto_ktp' => 'lukman.png',
            'no_telp' => '098807775465',
            'image' => ''
        ]);
    }
}
