<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Alatsewa as ModelsAlatsewa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class alatsewa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsAlatsewa::create([
            'kode' => 'Ex-M-01',
            'deskripsi' => 'Excavator Mini PC 40',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'All',
            'fungsi' => 'Excavator adalah alat berat yang digunakan untuk menggali tanah dalam jumlah yang besar',
            'harga' => 160000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 160000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'Ex-M-02',
            'deskripsi' => 'Excavator Mini PC 50',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'All',
            'fungsi' => 'Excavator adalah alat berat yang digunakan untuk menggali tanah dalam jumlah yang besar',
            'harga' => 160000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 160000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'Ex-M-03',
            'deskripsi' => 'Excavator Mini PC 75',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'All',
            'fungsi' => 'Excavator adalah alat berat yang digunakan untuk menggali tanah dalam jumlah yang besar',
            'harga' => 170000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 170000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'Ex-M-04',
            'deskripsi' => 'Excavator Mini PC 100',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'All',
            'fungsi' => 'Excavator adalah alat berat yang digunakan untuk menggali tanah dalam jumlah yang besar',
            'harga' => 155000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 155000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'Ex-M-05',
            'deskripsi' => 'Excavator Mini PC 200',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'All',
            'fungsi' => 'Excavator adalah alat berat yang digunakan untuk menggali tanah dalam jumlah yang besar',
            'harga' => 120000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 120000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'WL-01',
            'deskripsi' => 'Wheel Loader 0.8 m3',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'Komatsu WA-70',
            'fungsi' => '-',
            'harga' => 120000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 120000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'BD-01',
            'deskripsi' => 'Bulldozer D20-3',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'Komatsu',
            'fungsi' => 'diperuntukkan mengolah tanah,  untuk membersihkan medan dari kayu, batu-batuan, sampai tonggak-tonggak pohon',
            'harga' => 150000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 150000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'BD-02',
            'deskripsi' => 'Bulldozer D31E',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'Komatsu',
            'fungsi' => 'diperuntukkan mengolah tanah,  untuk membersihkan medan dari kayu, batu-batuan, sampai tonggak-tonggak pohon',
            'harga' => 155000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 155000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'BD-03',
            'deskripsi' => 'Bulldozer D65P',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '01'),
            'tanggal_selesai' => Carbon::create('2022', '07', '03'),
            'merk' => 'Komatsu',
            'fungsi' => 'diperuntukkan mengolah tanah,  untuk membersihkan medan dari kayu, batu-batuan, sampai tonggak-tonggak pohon',
            'harga' => 170000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 170000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'MG-01',
            'deskripsi' => 'Motor Grader 125 HP',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '04'),
            'tanggal_selesai' => Carbon::create('2022', '07', '06'),
            'merk' => 'Cat 120H',
            'fungsi' => 'berfungsi untuk meratakan pembukaan tanah secara mekanis, dipakai untuk keperluan seperti penggusuran tanah, mencampurkan dan menghamparkan material di lapangan, hingga pemotongan dan pembuatan saluran ',
            'harga' => 170000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 170000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'MG-02',
            'deskripsi' => 'Motor Grader 135 HP',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '04'),
            'tanggal_selesai' => Carbon::create('2022', '07', '06'),
            'merk' => 'Cat 120H',
            'fungsi' => 'berfungsi untuk meratakan pembukaan tanah secara mekanis, dipakai untuk keperluan seperti penggusuran tanah, mencampurkan dan menghamparkan material di lapangan, hingga pemotongan dan pembuatan saluran ',
            'harga' => 190000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 190000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'MG-03',
            'deskripsi' => 'Motor Grader 180 HP',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '04'),
            'tanggal_selesai' => Carbon::create('2022', '07', '06'),
            'merk' => 'Komatsu GD655',
            'fungsi' => 'berfungsi untuk meratakan pembukaan tanah secara mekanis, dipakai untuk keperluan seperti penggusuran tanah, mencampurkan dan menghamparkan material di lapangan, hingga pemotongan dan pembuatan saluran ',
            'harga' => 250000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 250000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'CRN-01',
            'deskripsi' => 'Crane Kapasitas 30-35 ton',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '07'),
            'tanggal_selesai' => Carbon::create('2022', '07', '09'),
            'merk' => '-',
            'fungsi' => '-',
            'harga' => 350000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 350000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'CRW-CRN-01',
            'deskripsi' => 'Crawler Crane 10-15 ton',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '07'),
            'tanggal_selesai' => Carbon::create('2022', '07', '09'),
            'merk' => '-',
            'fungsi' => '-',
            'harga' => 3900000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 390000 * 12,
        ]);
        ModelsAlatsewa::create([
            'kode' => 'RGR-CRN-01',
            'deskripsi' => 'Roughter Crane 10 ton',
            'tempat_sewa' => 'PT.01',
            'tanggal_mulai' => Carbon::create('2022', '07', '10'),
            'tanggal_selesai' => Carbon::create('2022', '07', '12'),
            'merk' => '-',
            'fungsi' => '-',
            'harga' => 5500000,
            'jumlah' => 12,
            'satuan' => 'jam',
            'harga_total' => 5500000 * 12,
        ]);
    }
}
