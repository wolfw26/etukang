<?php

namespace App\Http\Livewire\Client\Rab;

use App\Models\Client;
use App\Models\Proyek;
use App\Models\Rab;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class RabHome extends Component
{
    public $rabid;
    protected $listeners = ['konfirmasi' => 'render'];


    public function setuju(Rab $id)
    {
        $id->status = "setuju";
        $id->save();
        $this->emit('konfirmasi');
    }
    public function perbaiki(Rab $id)
    {
        $id->status = "perbaiki";
        $id->save();

        $this->emit('konfirmasi');
    }
    public function render()
    {
        $client = Auth::id();
        $data = Client::where('users_id', Auth::id())->first(); //Data Client
        $proyek = Proyek::where('client_id', $data->id)->first(); //Proyek dg ID client
        $rab = Rab::where('proyek_id', $proyek->id)->first();
        if ($rab == null) {
            $data = null;
            $datarab = [];
        } else {
            $data = $rab;
            $datarab = $data->datarab;
            // if ($rab->datarab->count() > 0) {
            //     foreach ($data as $s) {
            //         $this->rabid = $s;
            //     }
            // }
            // if ($rab->count() > 0) {
            // $data = $rab->datarab;
            // } else {
            // $data = 0;
            // }
            // dd($data);
        }

        return view('livewire.client.rab.rab-home', [
            'datarab' => $datarab,
            'rab' => $data
        ])
            ->extends(
                'usertemplate',
                ['title' => 'Rab']
            )
            ->section('main');
    }
}
