<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alat;
use App\Models\Alatsewa as ModelsAlatsewa;
use Carbon\Carbon;
use Database\Seeders\alatsewa as SeedersAlatsewa;
use Livewire\Component;


class Alatsewa extends Component
{
    public $deskripsi, $merk, $fungsi, $sewa, $tglm, $tgls, $harga, $satuan, $tharga, $jumlah, $jumlah_hari, $kode, $dibayar, $sisa;
    public $id_sewa, $cari;
    protected $listeners = ['deleteConfirmed' => 'hapus'];
    public $date, $date2, $jarak;
    public $pilihalat;


    protected $rules = [
        'kode' => 'required',
        'deskripsi' => 'required',
        'sewa' => 'required',
        'tglm' => 'required',
        'tgls' => 'date|required',
        'harga' => 'required|integer',
        'satuan' => 'required',
        'jumlah' => 'required|integer',
        'dibayar' => 'required|integer',
        'pilihalat' => 'required'
    ];

    public function edit(ModelsAlatsewa $id)
    {
        $this->id_sewa = $id->id;
        $this->kode = $id->kode;
        $this->deskripsi = $id->deskripsi;
        $this->sewa = $id->tempat_sewa;
        $this->tglm = $id->tanggal_mulai;
        $this->tgls = $id->tanggal_selesai;
        $this->harga = $id->harga;
        $this->jumlah = $id->jumlah;
        $this->satuan = $id->satuan;
        $this->kode = $id->kode;
        $this->tharga = $id->harga_total;
        $this->dibayar = $id->dibayar;
        $this->sisa = $id->sisa;
    }
    public function update(ModelsAlatsewa $data)
    {
        $this->tharga = ($this->harga * $this->jumlah_hari) * $this->jumlah;
        $data->kode = $this->kode;
        $data->deskripsi = $this->deskripsi;
        $data->tempat_sewa = $this->sewa;
        $data->tanggal_mulai = $this->tglm;
        $data->tanggal_selesai = $this->tgls;
        $data->merk = $this->merk;
        $data->fungsi = $this->fungsi;
        $data->harga = $this->harga;
        $data->jumlah_hari = $this->jumlah_hari;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->harga_total = ($this->harga * $this->jumlah_hari) * $this->jumlah;
        $data->dibayar = $this->dibayar;
        $data->sisa = $this->sisa;
        if ($this->sisa > 1) {
            $status = " belum lunas";
        } else {
            $status = 'Lunas';
        }
        $data->status = $status;
        $data->save();


        session()->flash('berhasil', 'Berhasil Di ubah');

        $this->kode = null;
        $this->deskripsi = null;
        $this->sewa = null;
        $this->tglm = null;
        $this->tgls = null;
        $this->merk = null;
        $this->fungsi = null;
        $this->harga = null;
        $this->jumlah_hari = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->tharga = null;
        $this->dibayar = null;
        $this->sisa = null;
    }
    public function tambahSewa()
    {
        $this->validate();
        $this->tharga = ($this->harga * $this->jumlah_hari) * $this->jumlah;
        $data = new ModelsAlatsewa;
        $data->kode = $this->kode;
        $data->deskripsi = $this->deskripsi;
        $data->tempat_sewa = $this->sewa;
        $data->tanggal_mulai = $this->tglm;
        $data->tanggal_selesai = $this->tgls;
        $data->merk = $this->merk;
        $data->fungsi = $this->fungsi;
        $data->harga = $this->harga;
        $data->jumlah_hari = $this->jumlah_hari;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->harga_total = ($this->harga * $this->jumlah_hari) * $this->jumlah;
        $data->dibayar = $this->dibayar;
        $data->sisa = $this->sisa;
        if ($this->sisa > 1) {
            $status = " belum lunas";
        } else {
            $status = 'Lunas';
        }
        $data->status = $status;
        $data->save();

        // $id = $data->id;

        // $alat = new Alat;
        // $alat->kode = $this->kode;
        // $alat->nama = $this->deskripsi;
        // $alat->fungsi = '-';
        // $alat->Merk = '-';
        // $alat->status = '-';
        // $alat->kepemilikan = 'sewa';
        // $alat->satuan = $this->satuan;
        // $alat->harga_satuan = $this->harga;
        // $alat->sewa_id = $id;
        // $alat->save();

        $this->kode = null;
        $this->deskripsi = null;
        $this->sewa = null;
        $this->tglm = null;
        $this->tgls = null;
        $this->merk = null;
        $this->fungsi = null;
        $this->harga = null;
        $this->jumlah_hari = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->tharga = null;
        $this->dibayar = null;
        $this->sisa = null;
    }
    public function hapus($id)
    {
        $data = ModelsAlatsewa::find($id);
        $data->delete();
    }

    public function pelunasan(ModelsAlatsewa $pelunasan)
    {
        $pelunasan->dibayar = $pelunasan->dibayar + $pelunasan->sisa;
        $pelunasan->sisa = 0;
        $pelunasan->status = 'Lunas';
        $pelunasan->save();
    }
    public function render()
    {
        if ($this->pilihalat != null) {
            $alat = Alat::find($this->pilihalat);
            $this->deskripsi = $alat->nama;
            $this->kode = $alat->kode;
            $this->merk = $alat->Merk;
            $this->fungsi = $alat->fungsi;
            $this->harga = $alat->harga_satuan;
            $this->satuan = $alat->satuan;
        }

        if ($this->tglm != null && $this->tgls != null) {
            $awal = Carbon::create($this->tglm);
            $akhir = Carbon::create($this->tgls);
            $this->jumlah_hari = $awal->diffInDays($akhir);
        }
        if ($this->harga != '' && $this->jumlah != '' && $this->jumlah_hari != null) {
            $this->tharga = ($this->harga * $this->jumlah_hari) * $this->jumlah;
        } else {
            $this->tharga = 0;
        };

        if ($this->dibayar != null) {
            $this->sisa = $this->tharga - $this->dibayar;
        }
        // $dataedit = ModelsAlatsewa::find($this->edit);
        // $data = ModelsAlatsewa::find(1);
        // $waktu_selesai = Carbon::create($data->tanggal_selesai);
        // $waktu_mulai = Carbon::create($data->tanggal_mulai);
        // $this->date = $waktu_mulai;
        // $this->date2 = $waktu_selesai;
        // $this->jarak = $this->date->diffInDays($this->date2->subMonth(), false);

        return view('livewire.alat.alatsewa', [
            'title' => 'Data Sewa Alat',
            'data' => ModelsAlatsewa::latest()->where('kode', 'like', '%' . $this->cari . '%')
                ->orWhere('deskripsi', 'like', '%' . $this->cari . '%')
                ->orWhere('tempat_sewa', 'like', '%' . $this->cari . '%')->get(),
            'alat' => Alat::where('kepemilikan', 'sewa')->get()

        ])
            ->extends('component.template', ['title' => 'Sewa Alat'])
            ->section('konten');
    }
}
