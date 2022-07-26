<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Material;
use App\Models\Material_in;
use App\Models\Materialout;
use App\Models\Stok;
use Livewire\Component;

class LaporanMaterial extends Component
{
    public $pilihan;
    public $modecetak = 'all';
    public $tglawl, $tglakhr;


    public function kosong()
    {
        $this->tglawl = null;
        $this->tglakhr = null;
    }
    public function render()
    {
        // if ($this->cetakItem == 'all') {
        //     $data = Stok::all();
        //     $material = $data->datamaterial;
        // } else {
        //     $material = Stok::latest()->where('material_id',  $this->cetakItem)->get();
        // }
        if ($this->modecetak == 'all') {
            $material = Material::all();
        } elseif ($this->modecetak == 'peritem') {
            $material = Stok::where('material_id', $this->pilihan)->get();
        } elseif ($this->modecetak == 'masuk') {
            if ($this->tglawl == null && $this->tglakhr == null) {
                $material = Material_in::all();
            } else {
                if (Material_in::all()->count() > 0) {
                    $material1 = Material_in::first()->whereBetween('tanggal', [$this->tglawl, $this->tglakhr]);
                    $material = $material1->orderBy('id', 'asc')->get();
                } else {
                    $material = [];
                }
            }
        } elseif ($this->modecetak == 'keluar') {
            if ($this->tglawl == null && $this->tglakhr == null) {
                $material = Materialout::all();
            } else {
                if (Materialout::all()->count() > 0) {
                    $material1 = Materialout::first()->whereBetween('tanggal', [$this->tglawl, $this->tglakhr]);
                    $material = $material1->orderBy('id', 'asc')->get();
                } else {
                    $material = [];
                }
            }
        } else {
            $material = Material::all();
        }

        return view('livewire.laporan.laporan-material', [
            'materials' => Material::all(),
            'data' => $material,
            'material_masuk' => Material_in::all(),
            'material_keluar' => Materialout::all()
        ])
            ->extends('component.template', ['title' => 'Laporan Material'])
            ->section('konten');
    }
}
