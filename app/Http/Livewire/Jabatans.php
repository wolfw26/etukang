<?php

namespace App\Http\Livewire;

use App\Models\Jabatan;
use Livewire\Component;

class Jabatans extends Component
{
    public $cari, $jabatan, $gapok, $transport, $makan;
    public $tes = "hadir";


    protected $rules = [
        'jabatan' => 'required|max:100',
        'gapok' => 'required|integer',
        'gapok' => 'nullable',
        'gapok' => 'nullable',
    ];

    public function edit(Jabatan $id)
    {
        $this->jabatan = $id->jabatan;
        $this->gapok = $id->gapok;
        $this->transport = $id->transport;
        $this->makan = $id->makan;
    }

    public function update(Jabatan $id)
    {
        $id->jabatan = strtolower($this->jabatan);
        $id->gapok = $this->gapok;
        $id->transport = $this->transport;
        $id->makan = $this->makan;
        $id->save();

        session()->flash('update', 'Jabatan Telah Di perbarui');
        $this->jabatan = null;
        $this->gapok = null;
        $this->transport = null;
        $this->makan = null;
    }

    public function store()
    {
        $this->validate();
        $data = new Jabatan;
        $data->jabatan = strtolower($this->jabatan);
        $data->gapok = $this->gapok;
        $data->transport = $this->transport;
        $data->makan = $this->makan;
        $data->save();

        // $this->dispatchBrowserEvent('success', ['message' => 'Berhasil Menambahkan']);
        $this->dispatchBrowserEvent('success', ['message' => 'Berhasil Di tambah']);


        $this->jabatan = null;
        $this->gapok = null;
        $this->transport = null;
        $this->makan = null;
    }

    public function hapus(Jabatan $jabatan)
    {
        $jabatan->delete();

        // $this->dispatchBrowserEvent('success', ['message' => 'Berhasil Di hapus']);
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'User Dihapus']
        );
    }


    public function render()
    {
        return view('livewire.jabatans', [
            'data' => Jabatan::all()
        ])
            ->extends('component.template', ['title' => 'jabatan'])
            ->section('konten');
    }
}
