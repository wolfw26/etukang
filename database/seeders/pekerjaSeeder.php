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
            'Nama' => 'Joko',
            'alamat' => 'Jl. Panglima batur',
            'tlahir' => 'Laki-laki',
            'tgl_lahir' => '1999-04-18',
            'jk' => 'Laki-laki',
            'riwayat' => 'Pemabanguna Rumah 2 Lantai',
            'Lain' => 'Sebagai pimpinan Proyek',
            'users_id' => '4',
        ]);
        Pekerja::create([
            'Nama' => 'Kusni',
            'alamat' => 'Jl. Panglima batur',
            'tlahir' => 'Laki-laki',
            'tgl_lahir' => '1997-04-18',
            'jk' => 'Laki-laki',
            'riwayat' => 'Pemabanguna Perumahan',
            'Lain' => 'Sebagai pimpinan Proyek',
            'users_id' => '5',
        ]);
        Pekerja::create([
            'Nama' => 'Ruhian',
            'alamat' => 'Jl. Panglima batur',
            'tlahir' => 'Laki-laki',
            'tgl_lahir' => '2000-04-18',
            'jk' => 'Laki-laki',
            'riwayat' => 'Pemabanguna Perumahan',
            'Lain' => 'pekerja',
            'users_id' => '6',
        ]);
    }
}
