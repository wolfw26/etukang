<?php

namespace App\Http\Controllers;

use App\Models\Rab;
use App\Models\Client;
use App\Models\Proyek;
use App\Models\Tukang;
use App\Models\DataProyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
        return view('admin.proyek', [
            'title' => 'Proyek',
            'data' => Proyek::latest()->Cari(request(['cari']))->paginate(8)->withQueryString(),
            'tukang' => Tukang::get(['nama', 'id']),
            'client' => Client::get(['nama', 'id'])
        ]);
    }
    public function show(Proyek $proyek)
    {
        return view('admin.detail.detailproyek', [
            'title' => 'Proyek',
            // 'nama' => $proyek->tukang->nama,
            'client' => $proyek->client,
            'data' =>  $proyek->dataproyek,
            'tukang' => $proyek->tukang,
            'proyek' => $proyek
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();

        // 'nama_proyek' => 'required|string',
        // 'jenis_proyek' => 'string',
        // 'alamat' => 'required|string',
        // 'luas_tanah' => 'required|string',
        // 'panjang_rumah' => 'required',
        // 'lebar_rumah' => 'required',
        // 'satuan' => 'required|string',
        // 'status' => 'string',
        // 'tukang_id' => 'required|int',
        // 'client_id' => 'required|int'

        $proyek = new Proyek;

        $proyek->nama_proyek = $data['nama_proyek'];
        $proyek->jenis_proyek = $data['jenis_proyek'];
        $proyek->alamat = $data['alamat'];
        $proyek->luas_tanah = $data['luas_tanah'];
        $proyek->panjang_rumah = $data['panjang_tanah'];
        $proyek->lebar_rumah = $data['lebar_tanah'];
        $proyek->satuan = $data['satuan'];
        $proyek->status = 'perencanaan';
        $proyek->tukang_id = $data['tukang'];
        $proyek->client_id = $data['client'];
        $proyek->save();
        return redirect()->back()->with('tambah', 'Ditambahkan');
    }
    public function trash($id)
    {
        $proyek = Proyek::find($id);
        $data = DataProyek::where('proyek_id', $id);
        $data->delete();
        $proyek->delete();
        return redirect()->back()->with('hapus', 'Data DI hapus');
    }
    public function update()
    {
        return view('admin.proyek', [
            'title' => 'Proyek',
            'data' => Proyek::all()
        ]);
    }

    public function rab(Proyek $proyek)
    {
        $data = Rab::where('proyek_id', $proyek->id)->get();
        $client = $proyek->client->nama;
        $rab = count($data);

        if ($rab == 0) {

            return redirect()->back()->with('kosong', 'Data Belum Di buat');
        }
        foreach ($data as $d) {
            return redirect()->route('rab.view', $d);
        }
    }
}
