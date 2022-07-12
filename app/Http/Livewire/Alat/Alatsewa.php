<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alat;
use App\Models\Alatsewa as ModelsAlatsewa;
use Carbon\Carbon;
use Livewire\Component;


class Alatsewa extends Component
{
    public $deskripsi, $sewa, $tglm, $tgls, $harga, $satuan, $tharga, $jumlah, $kode;
    public $id_sewa, $cari;
    protected $listeners = ['deleteConfirmed' => 'hapus'];
    public $date, $date2, $jarak;


    protected $rules = [
        'kode' => 'required',
        'deskripsi' => 'required',
        'sewa' => 'required',
        'tglm' => 'date|nullable',
        'tgls' => 'date|nullable',
        'harga' => 'required|integer',
        'satuan' => 'required',
        'jumlah' => 'required|integer'
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
    }
    public function update()
    {
        $this->validate();
        $data = ModelsAlatsewa::find($this->id_sewa);
        $data->kode = $this->kode;
        $data->deskripsi = $this->deskripsi;
        $data->tempat_sewa = $this->sewa;
        $data->tanggal_mulai = $this->tglm;
        $data->tanggal_selesai = $this->tgls;
        $data->harga = $this->harga;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->harga_total = $this->harga * $this->jumlah;
        $data->save();

        $alat = Alat::where('sewa_id', $this->id_sewa)->first();
        $alat->kode = $this->kode;
        $alat->nama = $this->deskripsi;
        $alat->fungsi = '-';
        $alat->Merk = '-';
        $alat->status = '-';
        $alat->kepemilikan = 'sewa';
        $alat->satuan = $this->satuan;
        $alat->harga_satuan = $this->harga;
        $alat->sewa_id = $this->id_sewa;
        $alat->save();


        session()->flash('berhasil', 'Berhasil Di ubah');

        $this->kode = null;
        $this->deskripsi = null;
        $this->sewa = null;
        $this->tglm = null;
        $this->tgls = null;
        $this->harga = null;
        $this->satuan = null;
        $this->tharga = null;
        $this->jumlah = null;
        $this->id_sewa = null;
    }
    public function tambahSewa()
    {
        $this->validate();
        $this->tharga = $this->harga * $this->jumlah;
        $data = new ModelsAlatsewa;
        $data->kode = $this->kode;
        $data->deskripsi = $this->deskripsi;
        $data->tempat_sewa = $this->sewa;
        $data->tanggal_mulai = $this->tglm;
        $data->tanggal_selesai = $this->tgls;
        $data->harga = $this->harga;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->harga_total = $this->harga * $this->jumlah;
        $data->save();

        $id = $data->id;

        $alat = new Alat;
        $alat->kode = $this->kode;
        $alat->nama = $this->deskripsi;
        $alat->fungsi = '-';
        $alat->Merk = '-';
        $alat->status = '-';
        $alat->kepemilikan = 'sewa';
        $alat->satuan = $this->satuan;
        $alat->harga_satuan = $this->harga;
        $alat->sewa_id = $id;
        $alat->save();

        $this->kode = null;
        $this->deskripsi = null;
        $this->sewa = null;
        $this->tglm = null;
        $this->tgls = null;
        $this->harga = null;
        $this->satuan = null;
        $this->tharga = null;
        $this->jumlah = null;
    }

    public function hapus($id)
    {
        $data = ModelsAlatsewa::find($id);
        $alat = Alat::where('sewa_id', $id);
        $data->delete();
        $alat->delete();
    }
    public function render()
    {
        if ($this->harga != '' && $this->jumlah != '') {
            $this->tharga = $this->harga * $this->jumlah;
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
                ->orWhere('tempat_sewa', 'like', '%' . $this->cari . '%')->get()

        ]);
    }
}
