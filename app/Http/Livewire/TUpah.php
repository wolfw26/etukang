<?php

namespace App\Http\Livewire;

use App\Models\Ahsp;
use App\Models\AhspData;
use Livewire\Component;

class TUpah extends Component
{
    public $ahsp;
    public $deskripsi;
    public $volume;
    public $satuan;
    public $harga;

    public function tambahUpah()
    {
        $data = new AhspData;

        $data->rincian = $this->deskripsi;
        $data->volume = $this->volume;
        $data->satuan = $this->satuan;
        $data->harga_satuan = $this->harga;
        $data->total = $this->harga * $this->volume;
        $data->kategori = "upah";
        $data->ahsp_id = $this->ahsp->id;
        $data->save();

        $total = Ahsp::find($this->ahsp->id);
        $upah  = $total->dataahsp->where('kategori', 'upah');
        $bahan  = $total->dataahsp->where('kategori', 'bahan');
        $alat  = $total->dataahsp->where('kategori', 'alat');
        $total->total_upah = $upah->sum('total');
        $total->total_bahan = $bahan->sum('total');
        $total->total_alat = $alat->sum('total');
        $total->total = $total->dataahsp->sum('total');
        $total->save();


        $this->deskripsi = null;
        $this->volume = null;
        $this->satuan = null;
        $this->harga = null;

        $this->emit('upahStore');
    }
    public function render()
    {
        return view('livewire.t-upah');
    }
}
