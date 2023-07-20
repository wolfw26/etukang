<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\Monitoring as ModelsMonitoring;
use App\Models\Proyek;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Monitoring extends Component
{
    use WithFileUploads;
    public $idClient;
    public $proyek, $id_proyek;
    public $image;
    public $keterangan, $deskripsi, $komentar;

    public function Tambah()
    {
        // $proyek = Proyek::find($id);
        // $client = $proyek->client_id;
        $images = $this->image->store('monitoring');
        $mon = new ModelsMonitoring();
        $mon->keterangan = $this->keterangan;
        $mon->deskripsi = $this->deskripsi;
        $mon->proyek_id = $this->id_proyek->id;
        $mon->komentar = $this->komentar;
        $mon->gambar = $images;
        $status = $mon->save();
        if ($status) {
            session()->flash('message', 'Post successfully Add.', 'alert', 'alert-success');
            session()->flash('alert', 'alert-success');
        } else {
            session()->flash('message', 'failed to add data', 'alert', 'alert-warning');
            session()->flash('alert', 'alert-warning');
        }

        $this->keterangan = null;
        $this->deskripsi = null;
        $this->komentar = null;
        $this->image = null;
    }
    public function Hapus(ModelsMonitoring $id)
    {
        unlink(public_path('storage/' . $id->gambar));
        $id->delete();
    }
    public function render()
    {
        // $this->client = Client::where('users_id', Auth::id())->first();
        $id_client = Client::where('users_id', Auth::id())->first();
        $this->idClient = $id_client->id;
        $this->id_proyek = Proyek::where('client_id', $id_client->id)->first('id');
        $this->proyek = Proyek::where('client_id', $id_client->id)->first();
        // $this->proyek = Proyek::where('client_id', $this->client);

        return view('livewire.client.monitoring', [
            'data' => ModelsMonitoring::all()

        ])->extends('usertemplate', [
            'title' => 'PEKERJAAN',
        ])
            ->section('main');
    }
}
