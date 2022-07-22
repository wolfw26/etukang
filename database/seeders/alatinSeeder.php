<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Alatin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class alatinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alatin::create([
            'kode' => 'M-01',
            'keterangan' => 'Meteran 19mm',
            'tanggal' => Carbon::create('2022', '07', '01'),
            'merk' => '5M Giant',
            'fungsi' => 'Alat Ukur',
            'harga' => 23500,
            'tempat' => 'PriceZa',
            'jumlah' => 2,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 23500 * 2,
        ]);
        Alatin::create([
            'kode' => 'K-R-01',
            'keterangan' => 'Kuas Cat Roll',
            'tanggal' => Carbon::create('2022', '07', '01'),
            'merk' => '-',
            'fungsi' => 'Pengecatan',
            'harga' => 13500,
            'tempat' => 'PriceZa',
            'jumlah' => 5,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 13500 * 5,
        ]);
        Alatin::create([
            'kode' => 'CTK-01',
            'keterangan' => 'Cetok Stainless',
            'tanggal' => Carbon::create('2022', '07', '01'),
            'merk' => '-',
            'fungsi' => 'Penggalian ringan, Cetok Adukan',
            'harga' => 70000,
            'tempat' => 'PriceZa',
            'jumlah' => 5,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 70000 * 5,
        ]);
        Alatin::create([
            'kode' => 'WTRP-01',
            'keterangan' => 'Waterpas',
            'tanggal' => Carbon::create('2022', '07', '01'),
            'merk' => '-',
            'fungsi' => 'Alat Ukur keseimbangan',
            'harga' => 140000,
            'tempat' => 'PriceZa',
            'jumlah' => 6,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 140000 * 6,
        ]);
        Alatin::create([
            'kode' => 'SK-01',
            'keterangan' => 'Penggaris Siku',
            'tanggal' => Carbon::create('2022', '07', '01'),
            'merk' => '-',
            'fungsi' => 'Alat Ukur Sudut',
            'harga' => 26000,
            'tempat' => 'PriceZa',
            'jumlah' => 4,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 26000 * 4,
        ]);
        Alatin::create([
            'kode' => 'GRD-01',
            'keterangan' => 'Makita Gerinda Tangan',
            'tanggal' => Carbon::create('2022', '07', '02'),
            'merk' => '-',
            'fungsi' => 'Alat Potong',
            'harga' => 889110,
            'tempat' => 'Monotaro',
            'jumlah' => 2,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 889110 * 2,
        ]);
        Alatin::create([
            'kode' => 'KC-Ps-01',
            'keterangan' => 'Kunci ring Pas Set',
            'tanggal' => Carbon::create('2022', '07', '02'),
            'merk' => 'Tekiro',
            'fungsi' => 'Kunci Ring',
            'harga' => 389000,
            'tempat' => 'Monotaro',
            'jumlah' => 3,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 389000 * 3,
        ]);
        Alatin::create([
            'kode' => 'TG-PT-01',
            'keterangan' => 'Tang Potong',
            'tanggal' => Carbon::create('2022', '07', '02'),
            'merk' => 'Tekiro',
            'fungsi' => 'Pemotong kabel dan kawat',
            'harga' => 35500,
            'tempat' => 'Monotaro',
            'jumlah' => 5,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 35500 * 5,
        ]);
        Alatin::create([
            'kode' => 'TG-JP-01',
            'keterangan' => 'Tang Jepit',
            'tanggal' => Carbon::create('2022', '07', '02'),
            'merk' => 'Tekiro',
            'fungsi' => 'Penjepit kabel dan kawat',
            'harga' => 35500,
            'tempat' => 'Monotaro',
            'jumlah' => 5,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 35500 * 5,
        ]);
        Alatin::create([
            'kode' => 'OBG-01',
            'keterangan' => 'Obeng TPR Plus',
            'tanggal' => Carbon::create('2022', '07', '02'),
            'merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Baut',
            'harga' => 25000,
            'tempat' => 'Monotaro',
            'jumlah' => 10,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 25000 * 10,
        ]);
        Alatin::create([
            'kode' => 'KC-PP-01',
            'keterangan' => 'Kunci Pipa',
            'tanggal' => Carbon::create('2022', '07', '03'),
            'merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Pipa',
            'harga' => 53000,
            'tempat' => 'Monotaro',
            'jumlah' => 5,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 53000 * 5,
        ]);
        Alatin::create([
            'kode' => 'KC-T-01',
            'keterangan' => 'Kunci T',
            'tanggal' => Carbon::create('2022', '07', '03'),
            'merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Baut dan Ring',
            'harga' => 23000,
            'tempat' => 'Monotaro',
            'jumlah' => 2,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 23000 * 2,
        ]);
        Alatin::create([
            'kode' => 'KC-SHC-01',
            'keterangan' => 'Kunci Sok Set 24 pcs',
            'tanggal' => Carbon::create('2022', '07', '03'),
            'merk' => 'Tekiro',
            'fungsi' => 'Pekerjaan Baut',
            'harga' => 989000,
            'tempat' => 'Monotaro',
            'jumlah' => 2,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 989000 * 2,
        ]);
        Alatin::create([
            'kode' => 'PL-01',
            'keterangan' => 'Palu Tanduk',
            'tanggal' => Carbon::create('2022', '07', '04'),
            'merk' => 'Tekiro',
            'fungsi' => 'Pemukul Paku',
            'harga' => 76000,
            'tempat' => 'Monotaro',
            'jumlah' => 6,
            'satuan' => 'pcs',
            'status' => 'baru',
            'total_harga' => 76000 * 6,
        ]);
    }
}
