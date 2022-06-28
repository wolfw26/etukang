@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">AHS</strong></h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">AHS</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-green"></div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kode Ahs</th>
                                                <th scope="col">Nama AHS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d )
                                            <tr>
                                                <th scope="row">
                                                    <a href=" {{ route('material') }}/d/{{ $d->id }} " onclick="return confirm('Hapus Data   {{ $d->nama_material }} ');" class="btn btn-sm bg-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href=" {{ Route('material.edit',$d->id) }} " class="btn btn-sm bg-teal">
                                                        <i class="fas fa-edit" title="Edit" ></i>
                                                    </a>
                                                </th>
                                                <td> {{ $d->kode_ahs}}</td>
                                                <td> {{ $d->nama_ahs}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">Next</div>
                                <button>tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">Tambah AHS</div>
                <div class="card-body">
                    <form action="{{ route('ahs.add') }}" method="POST">
                        @csrf
                        <input type="text" name="kode_ahs" id="kode_ahs" placeholder="Kode Ahs">
                        <input type="text" name="nama_ahs" id="nama_ahs" placeholder="Nama AHs">
                        <button type="submit">Buat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <input type="text" placeholder="rincian_pekerjaan" name="rincian_pekerjaan" id="rincian_pekerjaan">
                        <input type="text" placeholder="satuan" name="satuan" id="satuan">
                        <select name="kategori" id="kategori">
                            <option value="upah">Upah</option>
                            <option value="bahan">Bahan</option>
                            <option value="alat">Alat</option>
                        </select>
                        <input type="int" placeholder="volume" name="volume" id="volume"> --}}
