<?php

namespace Database\Seeders;

use App\Models\Ahs;
use App\Models\User;
use App\Models\DataAhs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'rule' => 'admin'
        ]);
        Ahs::create([
            'kode_ahs' => 'A.1.5.1.13',
            'nama_ahs' => 'Pemasangan 1 m2 Lapisan Ijuk Tebal 10cm untuk Bidang resapan Tangki Septik',
            'kategori' => 'pekerjaan tanah'
        ]);
        DataAhs::create([
            'rincian' => 'pekerja',
            'volume' => 0.150,
            'satuan' => 'OH',
            'harga_satuan' => 75000,
            'total' => 75000 * 0.150,
            'kategori' => 'upah',
            'ahs_id' => 1
        ]);
        DataAhs::create([
            'rincian' => 'mandor',
            'volume' => 0.015,
            'satuan' => 'OH',
            'harga_satuan' => 80000,
            'total' => 0.015 * 80000,
            'kategori' => 'upah',
            'ahs_id' => 1
        ]);
        DataAhs::create([
            'rincian' => 'ijuk',
            'volume' => 6.000,
            'satuan' => 'kg',
            'harga_satuan' => 20000,
            'total' => 6.000 * 20000,
            'kategori' => 'bahan',
            'ahs_id' => 1
        ]);

        $this->call([
            clientSeeder::class,
            pekerjaSeeder::class,
            proyekSeeder::class,
            tukangSeeder::class,
            dataproyekSeeder::class,
            materialSeeder::class
        ]);
    }
}
