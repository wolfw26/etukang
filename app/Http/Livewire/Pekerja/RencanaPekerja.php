<?php

namespace App\Http\Livewire\Pekerja;

use App\Models\Proyek;
use App\Models\Pekerja;
use App\Models\RencanaKerja;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class RencanaPekerja extends Component
{
    public $dataproyek;

    public function selesai(RencanaKerja $data)
    {
        $data->status = 'selesai';
        $data->tanggal = now();
        $data->save();
    }
    public function belum(RencanaKerja $data)
    {
        $data->status = 'belum selesai';
        $data->tanggal = null;
        $data->save();
    }

    public function mount()
    {
        $pekerja = Pekerja::where('users_id', Auth::user()->id)->first();
        $this->dataproyek = Proyek::where('pekerja_id', $pekerja->id)
            ->where('status', 'DIKERJAKAN')->first();
    }
    public function render()
    {
        return view('livewire.pekerja.rencana-pekerja', [
            'proyek' => $this->dataproyek
        ])
            ->extends('component.templatepekerja', [
                'title' => 'Rencana Kerja',
                'pekerja' => Pekerja::where('users_id', Auth::user()->id)->first()
            ])
            ->section('konten');
    }
}
