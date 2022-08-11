<?php

namespace App\Http\Livewire\Proyek;

use App\Models\Client;
use App\Models\DataRab;
use App\Models\Proyek;
use Livewire\Component;
use App\Models\GambarProyek;
use App\Models\Pekerja;
use App\Models\Rab;
use App\Models\RencanaKerja;
use Livewire\WithFileUploads;

class DetailProyek extends Component
{
    use WithFileUploads;
    public $TukangProyek, $editTukang;
    public $proyek;
    public $radio;
    public $deskripsi, $lain, $image;
    public $tanggalKerja, $tglMulai, $tglSelesai;
    public $rencanaAwal, $rencanaAkhir, $ubahStatus;
    public $pekerjaan;
    protected $listeners = ['gambar' => 'render', 'ttukang' => 'render'];


    public function editPekerja()
    {

        $this->TukangProyek = $this->proyek->pekerja_id;
        $this->editTukang = 1;
    }
    public function tambahTukang()
    {
        $proyek = $this->proyek;
        $proyek->pekerja_id = $this->TukangProyek;
        $proyek->save();
        $this->TukangProyek = null;
        $this->editTukang = 0;
        $this->emit('ttukang');
    }
    // public function addTanggal(DataRab $data)
    // {

    //     $rab = $data->rab;
    //     $proyek = Proyek::find($data->rab->proyek_id);
    //     $rencana = RencanaKerja::where('datarab_id', $data->id)->get();
    //     $datarab = DataRab::where('rab_id', $rab->id)->first();
    //     $mulai = $this->rencanaMulai;
    //     $selesai = $this->rencanaSelesai;

    //     if ($rencana && $rencana->count() > 0) {
    //         $rencana->tanggal_mulai = $this->rencanaMulai;
    //         $rencana->tanggal_selesai = $this->rencanaSelesai;
    //         $rencana->save();
    //     } else {
    //         $data = new RencanaKerja;
    //         $data->keterangan = $datarab->rincian;
    //         $data->tanggal_mulai = $mulai;
    //         $data->tanggal_selesai = $selesai;
    //         $data->proyek_id = $proyek->id;
    //         $data->rab_id = $rab->proyek_id;
    //         $data->datarab_id = $datarab->id;
    //         $data->save();
    //     }
    // }
    public function addTanggal(RencanaKerja $rencana)
    {
        $rencana->tanggal_mulai = $this->rencanaAwal;
        $rencana->tanggal_selesai = $this->rencanaAkhir;
        $rencana->save();

        $this->rencanaAwal = null;
        $this->rencanaAkhir = null;
        $this->ubahStatus = 'selesai';
    }
    public function ubahRencana(RencanaKerja $rencana)
    {
        $this->rencanaAwal = $rencana->tanggal_mulai;
        $this->rencanaAkhir = $rencana->tanggal_selesai;
        $this->ubahStatus = 'edit';
    }
    public function tambahRencana()
    {
        $datarab = DataRab::find($this->pekerjaan);
        $rab = Rab::find($datarab->rab_id);
        $rencana = new RencanaKerja;
        $rencana->keterangan = $datarab->rincian;
        $rencana->rab_id = $rab->id;
        $rencana->proyek_id = $rab->proyekrab->id;
        $rencana->datarab_id = $datarab->id;
        $rencana->save();
        $this->pekerjaan = null;
    }
    public function tambahTanggal()
    {
        $proyek = $this->proyek;
        $proyek->tanggal_mulai = $this->tglMulai;
        $proyek->tanggal_selesai = $this->tglSelesai;
        $proyek->save();

        $rab = rab::where('proyek_id', $proyek->id);
        if ($rab->count() > 0) {
            $rab->tanggal_mulai = $proyek->tanggal_mulai;
            $rab->tangal_selesai = $proyek->tanggal_selesai;
            $rab->save();
        } else {
        }
        $this->tglMulai = null;
        $this->tglSelesai = null;
        $this->tanggalKerja = 'selesai';
    }
    public function editTanggal()
    {
        $proyek = $this->proyek;
        $this->tglMulai = $proyek->tanggal_mulai;
        $this->tglSelesai = $proyek->tanggal_selesai;
        $this->tanggalKerja = 'edit';
    }
    public function deleteImage(GambarProyek $id)
    {
        unlink(public_path('storage/' . $id->gambar));
        $status = $id->delete();

        if ($status) {
            session()->flash('success', 'Aksi Berhasil Dilakukan');
        } else {
            session()->flash('error', 'Maaf Aksi Gagal dilakukan Dilakukan');
        }
        $this->emit('gambar');
    }

    public function addImage(Proyek $proyek)
    {
        $this->validate([
            'deskripsi' => 'required',
            'lain' => 'required'
        ]);
        $image = $this->image->store('ProyekImage');
        $gambar = new GambarProyek;
        $gambar->deskripsi = $this->deskripsi;
        $gambar->gambar = $image;
        $gambar->lain_lain = $this->lain;
        $gambar->proyek_id = $proyek->id;
        $gambar->save();

        $this->deskripsi = null;
        $this->image = null;
        $this->lain = null;
        $this->emit('gambar');
    }

    public function selesai(RencanaKerja $rencana)
    {
        $rencana->status = 'selesai';
        $rencana->save();
    }
    public function belum(RencanaKerja $rencana)
    {
        $rencana->status = 'belum selesai';
        $rencana->save();
    }
    public function render()
    {
        $rab = Rab::where('proyek_id', $this->proyek->id)->first();
        if ($rab && $rab->count() > 0) {
            $data = $rab;
        } else {
            $data = [];
        }
        return view('livewire.proyek.detail-proyek', [
            'proyek' => $this->proyek,
            'client' => $this->proyek->client,
            'gambar' => GambarProyek::latest()->where('proyek_id', $this->proyek->id),
            'rab' => $data,
            'rencanaKerja' => RencanaKerja::where('proyek_id', $this->proyek->id)->get(),
            'pekerjaData' => Pekerja::all()
        ])
            ->extends('component.template', ['title' => 'Detail Proyek'])
            ->section('konten');
    }
    public function mount(Proyek $id)
    {
        $this->proyek = $id;
    }
    public function status(Proyek $id)
    {
        $this->validate([
            'radio' => 'required'
        ]);
        $id->status = $this->radio;
        $id->tanggal = now();
        $id->save();
        $this->radio = null;
    }
}
