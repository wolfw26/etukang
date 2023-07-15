<?php

namespace App\Http\Livewire\Pekerja;

use App\Models\Proyek;
use App\Models\Pekerja;
use App\Models\PekerjaanHarian;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class LaporanHarian extends Component
{
    use WithFileUploads;
    public $keterangan, $deskripsi, $gambar;
    public $dataproyek;

    public function Simpan()
    {
        $laporan = new PekerjaanHarian;
        $gambar = $this->gambar->store('pekerja');
        $laporan->keterangan = $this->keterangan;
        $laporan->deskripsi = $this->deskripsi;
        $laporan->image = $gambar;
        $laporan->proyek_id = $this->dataproyek->id;
        $laporan->save();

        $this->keterangan = null;
        $this->deskripsi = null;
        $this->gambar = null;
    }
    public function Hapus(PekerjaanHarian $id)
    {
        unlink(public_path('storage/' . $id->image));
        $id->delete();
    }
    public function render()
    {
        return view('livewire.pekerja.laporan-harian', [
            'data' => PekerjaanHarian::where('proyek_id', $this->dataproyek->id)->get()
        ])
            ->extends('component.templatepekerja', [
                'title' => 'Rencana Kerja',
                'pekerja' => Pekerja::where('users_id', Auth::user()->id)->first()
            ])
            ->section('konten');;
    }
    public function mount()
    {
        $pekerja = Pekerja::where('users_id', Auth::user()->id)->first();
        $this->dataproyek = Proyek::where('pekerja_id', $pekerja->id)
            ->where('status', 'DIKERJAKAN')->first();
    }
}
