<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alatsewa as ModelsAlatsewa;
use Livewire\Component;


class Alatsewa extends Component
{
    public $deskripsi, $sewa, $tglm, $tgls, $harga, $satuan, $jumlah;
    public $tharga;


    public function tambahSewa()
    {
        $this->tharga = $this->harga * $this->jumlah;
        $data = new ModelsAlatsewa;
        $data->deskripsi = $this->deskripsi;
        $data->tempat_sewa = $this->sewa;
        $data->tanggal_mulai = $this->tglm;
        $data->tanggal_selesai = $this->tgls;
        $data->harga = $this->harga;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->harga_total = $this->harga * $this->jumlah;
        $data->save();

        $this->deskripsi = null;
        $this->sewa = null;
        $this->tglm = null;
        $this->tgls = null;
        $this->harga = null;
        $this->satuan = null;
        $this->tharga = null;
        $this->jumlah = null;
    }
    public function render()
    {
        if ($this->harga != '' && $this->jumlah != '') {
            $this->tharga = $this->harga * $this->jumlah;
        } else {
            $this->tharga = 0;
        }

        $sewa = ModelsAlatsewa::latest()->get();

        return view('livewire.alat.alatsewa', [
            'title' => 'Data Sewa Alat',
            'data' => $sewa
        ]);
    }
}
