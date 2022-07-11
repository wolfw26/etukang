<?php

namespace App\Http\Livewire;

use App\Models\Alat;
use Livewire\Component;

class TAlat extends Component
{
    public $ahsp, $dropdown, $deskripsi, $volume, $satuan, $harga_satuan;
    public function render()
    {
        if ($this->dropdown > 0) {
            $data = Alat::where('id', $this->dropdown)->first();
            $this->deskripsi = $data->nama_material;
            $this->satuan = $data->satuan;
            $this->harga_satuan = $data->harga_satuan;
        }

        $alat = Alat::all();
        return view('livewire.t-alat', [
            'data' => $alat
        ]);
    }
}
