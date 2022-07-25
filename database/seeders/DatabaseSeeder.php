<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Ahs;
use App\Models\ahsp;
use App\Models\Alat;
use App\Models\User;
use App\Models\DataAhs;
use App\Models\Jabatan;
use App\Models\ahspdata;
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
        Jabatan::create([
            'jabatan' => 'Kepala Tukang',
            'gapok' => 190000,
            'transport' => 50000,
            'makan' => 60000,
        ]);
        Jabatan::create([
            'jabatan' => 'Tukang',
            'gapok' => 180000,
            'transport' => 50000,
            'makan' => 60000,
        ]);
        Jabatan::create([
            'jabatan' => 'Pekerja',
            'gapok' => 170000,
            'transport' => 50000,
            'makan' => 60000,
        ]);
        ahsp::create([
            'kode_ahs' => 'A.1',
            'nama_ahs' => 'Pembuatan bowplank(titik)',
            'kategori' => 'pekerjaan persiapan',

        ]);
        ahspdata::create([
            'rincian' => 'Mandor',
            'volume' => 0.0045,
            'satuan' => 'OH',
            'harga_satuan' => 163000,
            'total' => 0.0045 * 163000,
            'kategori' => 'upah',
            'ahsp_id' => 1
        ]);
        ahspdata::create([
            'rincian' => 'Kepala Tukang',
            'volume' => 0.0100,
            'satuan' => 'OH',
            'harga_satuan' => 153000,
            'total' => 0.0100 * 153000,
            'kategori' => 'upah',
            'ahsp_id' => 1
        ]);
        ahspdata::create([
            'rincian' => 'Tukang',
            'volume' => 0.1000,
            'satuan' => 'OH',
            'harga_satuan' => 126000,
            'total' => 0.1000 * 126000,
            'kategori' => 'upah',
            'ahsp_id' => 1
        ]);
        ahspdata::create([
            'rincian' => 'Pembantu Tukang',
            'volume' => 0.1000,
            'satuan' => 'OH',
            'harga_satuan' => 115000,
            'total' => 0.1000 * 115000,
            'kategori' => 'upah',
            'ahsp_id' => 1
        ]);
        ahspdata::create([
            'rincian' => 'Paku 2-5 Inchi',
            'volume' => 0.0500,
            'satuan' => 'doz',
            'harga_satuan' => 31200,
            'total' => 0.0500 * 31200,
            'kategori' => 'bahan',
            'ahsp_id' => 1
        ]);
        ahspdata::create([
            'rincian' => 'Kayu Meranti Usuk 4/6, 7/7',
            'volume' => 0.0120,
            'satuan' => 'M3',
            'harga_satuan' => 4355500,
            'total' => 0.0120 * 4355500,
            'kategori' => 'bahan',
            'ahsp_id' => 1
        ]);
        ahspdata::create([
            'rincian' => 'Kayu meranti Bekesting',
            'volume' => 0.0080,
            'satuan' => 'M3',
            'harga_satuan' => 3484400,
            'total' => 0.0080 * 3484400,
            'kategori' => 'bahan',
            'ahsp_id' => 1
        ]);
        ahsp::create([
            'kode_ahs' => 'A.1.1.1',
            'nama_ahs' => 'Pembuatan 1 m2 Steger/Perancah dari bambu s.d Tinggi 6 meter',
            'kategori' => 'pekerjaan persiapan',

        ]);
        ahspdata::create([
            'rincian' => 'pekerja',
            'volume' => 1.00,
            'satuan' => 'OH',
            'harga_satuan' => 75000,
            'total' => 75000 * 1.00,
            'kategori' => 'upah',
            'ahsp_id' => 2
        ]);
        ahspdata::create([
            'rincian' => 'Tukang Kayu',
            'volume' => 2.00,
            'satuan' => 'OH',
            'harga_satuan' => 80000,
            'total' => 80000 * 2.00,
            'kategori' => 'upah',
            'ahsp_id' => 2
        ]);
        ahspdata::create([
            'rincian' => 'Kepala Tukang',
            'volume' => 0.20,
            'satuan' => 'OH',
            'harga_satuan' => 90000,
            'total' => 90000 * 0.20,
            'kategori' => 'upah',
            'ahsp_id' => 2
        ]);
        ahspdata::create([
            'rincian' => 'Bambu diameter 6-8/600cm',
            'volume' => 1.25,
            'satuan' => 'batang',
            'harga_satuan' => 60000,
            'total' => 60000 * 1.25,
            'kategori' => 'bahan',
            'ahsp_id' => 2
        ]);
        Alat::create([
            'kode' => 'M-01',
            'nama' => 'Meteran 19mm',
            'Merk' => '5M Giant',
            'fungsi' => 'Alat Ukur',
            'harga_satuan' => 23500,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'K-R-01',
            'nama' => 'Kuas Cat Roll',
            'Merk' => '-',
            'fungsi' => 'Pengecatan',
            'harga_satuan' => 13500,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'CTK-01',
            'nama' => 'Cetok Stainless',
            'Merk' => '-',
            'fungsi' => 'Penggalian ringan, Cetok Adukan',
            'harga_satuan' => 70000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'WTRP-01',
            'nama' => 'Waterpas',
            'Merk' => '-',
            'fungsi' => 'Alat Ukur keseimbangan',
            'harga_satuan' => 140000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'SK-01',
            'nama' => 'Penggaris Siku',
            'Merk' => '-',
            'fungsi' => 'Alat Ukur Sudut',
            'harga_satuan' => 26000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'GRD-01',
            'nama' => 'Makita Gerinda Tangan',
            'Merk' => '-',
            'fungsi' => 'Alat Potong',
            'harga_satuan' => 889110,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'KC-Ps-01',
            'nama' => 'Kunci ring Pas Set',
            'Merk' => 'Tekiro',
            'fungsi' => 'Kunci Ring',
            'harga_satuan' => 389000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'TG-PT-01',
            'nama' => 'Tang Potong',
            'Merk' => 'Tekiro',
            'fungsi' => 'Pemotong kabel dan kawat',
            'harga_satuan' => 35500,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'TG-JP-01',
            'nama' => 'Tang Jepit',
            'Merk' => 'Tekiro',
            'fungsi' => 'Penjepit kabel dan kawat',
            'harga_satuan' => 35500,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'OBG-01',
            'nama' => 'Obeng TPR Plus',
            'Merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Baut',
            'harga_satuan' => 25000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'KC-PP-01',
            'nama' => 'Kunci Pipa',
            'Merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Pipa',
            'harga_satuan' => 53000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'KC-T-01',
            'nama' => 'Kunci T',
            'Merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Baut dan Ring',
            'harga_satuan' => 23000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'KC-SHC-01',
            'nama' => 'Kunci Sok Set 24 pcs',
            'Merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Baut',
            'harga_satuan' => 989000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);
        Alat::create([
            'kode' => 'PL-01',
            'nama' => 'Palu Tanduk',
            'Merk' => 'Tekiro',
            'fungsi' => 'Pemukul Paku',
            'harga_satuan' => 76000,
            'satuan' => 'pcs',
            'kepemilikan' => 'dimiliki',
        ]);

        $this->call([
            clientSeeder::class,
            pekerjaSeeder::class,
            proyekSeeder::class,
            tukangSeeder::class,
            dataproyekSeeder::class,
            materialSeeder::class,
            // alatinSeeder::class,
            alatsewa::class,
        ]);
    }
}
