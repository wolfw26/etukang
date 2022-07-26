<?php

namespace App\Http\Livewire;

use App\Models\Ahsp;
use App\Models\AhspData;
use App\Models\Jabatan;
use Livewire\Component;

class TUpah extends Component
{
    public $ahsp;
    public $deskripsi;
    public $volume;
    public $satuan;
    public $harga;
    public $pilih;

    protected $rules = [
        'deskripsi' => 'required',
        'volume' => 'required',
        'satuan' => 'required',
        'harga' => 'required|integer',
    ];
    public function tambahUpah()
    {
        $this->validate();
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
        $bahan  = $total->dataahsp->where('kategori', 'material');
        $alat  = $total->dataahsp->where('kategori', 'alat');
        $total->total_upah = $upah->sum('total');
        $total->total_bahan = $bahan->sum('total');
        $total->total_alat = $alat->sum('total');
        $jumlah = $total->dataahsp->sum('total');
        $profit = $total->profit * $jumlah / 100;
        $total->total = $total->dataahsp->sum('total') + $profit;
        $total->save();
        session()->flash('berhasil', 'Berhasil Di ubah');

        $this->deskripsi = null;
        $this->volume = null;
        $this->satuan = null;
        $this->harga = null;
        $this->pilih = null;

        $this->emit('upahStore');
    }
    public function render()
    {
        if ($this->pilih != null) {
            $jabatan = Jabatan::find($this->pilih);
            $this->deskripsi = $jabatan->jabatan;
            $this->harga = $jabatan->gapok;
        }
        return view('livewire.t-upah', [
            'jabatan' => Jabatan::all()
        ]);
    }
}
