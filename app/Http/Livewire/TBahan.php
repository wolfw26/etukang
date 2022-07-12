<?php

namespace App\Http\Livewire;

use App\Models\Ahsp;
use Livewire\Component;
use App\Models\AhspData;
use App\Models\Material;

class TBahan extends Component
{
    public $ahsp, $dropdown, $deskripsi, $volume, $satuan, $harga_satuan;

    protected $rules = [
        'volume' => 'required'
    ];

    public function tambah()
    {
        $this->validate();
        $data = new AhspData;

        $data->rincian = $this->deskripsi;
        $data->volume = $this->volume;
        $data->satuan = $this->satuan;
        $data->harga_satuan = $this->harga_satuan;
        $data->total = $this->harga_satuan * $this->volume;
        $data->kategori = "material";
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
        $this->harga_satuan = null;

        $this->emit('upahStore');
    }
    public function render()
    {
        if ($this->dropdown > 0) {
            $data = Material::where('id', $this->dropdown)->first();
            $this->deskripsi = $data->nama_material;
            $this->satuan = $data->satuan;
            $this->harga_satuan = $data->harga_satuan;
        }

        $material = Material::all();
        return view('livewire.t-bahan', [
            'data' => $material
        ]);
    }
}
