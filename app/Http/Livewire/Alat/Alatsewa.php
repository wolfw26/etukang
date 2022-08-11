<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alat;
use App\Models\Alatsewa as ModelsAlatsewa;
use App\Models\data_invoice;
use App\Models\invoice;
use Carbon\Carbon;
use Database\Seeders\alatsewa as SeedersAlatsewa;
use Livewire\Component;


class Alatsewa extends Component
{
    public $menu;
    public $deskripsi, $merk, $fungsi, $sewa, $tglm, $tgls, $harga, $satuan, $tharga, $jumlah, $jumlah_hari, $kode;
    public $id_sewa, $cari;
    protected $listeners = ['deleteConfirmed' => 'hapus'];
    public $date, $date2, $jarak;
    public $pilihalat;


    public function alat()
    {
        $this->menu = 'alat';
    }
    public function invoice()
    {
        $this->menu = 'invoice';
    }
    protected $rules = [
        'kode' => 'required',
        'deskripsi' => 'required',
        'sewa' => 'required',
        'tglm' => 'required',
        'tgls' => 'date|required',
        'harga' => 'required|integer',
        'satuan' => 'required',
        'jumlah' => 'required|integer',
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
        $this->jumlah_hari = $id->jumlah_hari;
        $this->satuan = $id->satuan;
        $this->kode = $id->kode;
        $this->tharga = $id->harga_total;
    }
    public function hapus($id)
    {
        $data = ModelsAlatsewa::find($id);
        $datainvoice = data_invoice::where('alatsewas_id', $data->id)->first();
        $this->emit('hapus', $data->id);
        $datainvoice->delete();
        $data->delete();
        $invoice = invoice::find($datainvoice->invoices_id);
        $invoice->total = $datainvoice->sum('total');
        $invoice->sisa =   $datainvoice->sum('total') - $invoice->dibayar;
        $invoice->save();
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
        $data->save();
        $alat = $data->id;

        $datainvoice = data_invoice::where('alatsewas_id', $data->id)->first();
        $datainvoice->deskipsi = $data->deskripsi;
        $datainvoice->harga = $data->harga;
        $datainvoice->jumlah = $data->jumlah_hari;
        $datainvoice->satuan = $data->satuan;
        $datainvoice->total = $data->harga_total;
        $datainvoice->alatsewas_id = $data->id;
        $datainvoice->save();


        $invoice = invoice::find($datainvoice->invoices_id);
        $invoice->total = $datainvoice->sum('total');
        $invoice->sisa =   $datainvoice->sum('total') - $invoice->dibayar;
        $invoice->save();

        $this->emit('UpdateAlat', $alat);

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
        if ($this->satuan == 'hari') {
            if ($this->tglm != null && $this->tgls != null) {
                $awal = Carbon::create($this->tglm);
                $akhir = Carbon::create($this->tgls);
                $this->jumlah_hari = $awal->diffInDays($akhir);
            }
        } else {
            $this->jumlah_hari = $this->jumlah_hari;
        }
        if ($this->harga != '' && $this->jumlah != '' && $this->jumlah_hari != null) {
            $this->tharga = ($this->harga * $this->jumlah_hari) * $this->jumlah;
        } else {
            $this->tharga = 0;
        };
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
