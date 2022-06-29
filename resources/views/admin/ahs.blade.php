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
                                                <th scope="col"class="w-25 p-3">Aksi</th>
                                                <th scope="col"class="w-25 p-3">Kode Ahs</th>
                                                <th scope="col">Nama AHS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d )
                                            <tr>
                                                <th scope="col">
                                                    <a href=" {{ route('ahs') }}/{{ $d->id }}/d " onclick="return confirm('Hapus Data   {{ $d->nama_material }} ');" class="btn btn-sm bg-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href=" {{ Route('ahs.edit',$d->id) }} " class="btn btn-sm bg-teal">
                                                        <i class="fas fa-edit" title="Edit"></i>
                                                    </a>
                                                    <a href="{{ route('ahs.detail', $d->id)}}" class="btn btn-sm bg-success">
                                                        <i class="fas fa-eye" title="view"></i>
                                                    </a>
                                                </th>
                                                <td> {{ $d->kode_ahs}}</td>
                                                <td class=" text-bold"> {{ $d->nama_ahs}}</td>
                                                <td> </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
            <br>
            <div class="card">
                <div class="card-body">Tambah Data AHS</div>
                <div class="card-body">
                    <form action="{{ route('ahs.add') }}" method="POST">
                        @csrf
                        <label for="ahs">Pilih AHS</label>

                        <select id="ahs_id" name="ahs_id">
                            @foreach ( $data as $d )
                            <option value="{{ $d->id }}">{{ $d->nama_ahs }}</option>
                            @endforeach
                        </select> <br>
                        <input type="text" name="rincian_pekerjaan" id="rincian_pekerjaan" placeholder="Keterangan Item"> <br>
                        <span></span>
                        <input type="number" name="volume" id="volume" placeholder="Volume.."> <span> </span>
                        <input type="text" name="satuan" id="satuan" placeholder="Satuan.."><br> <span> </span>
                        <input type="text" name="harga_sataun" id="harga_sataun" placeholder="Harga Satuan.."><br>
                        <input type="text" name="total" id="total" placeholder="Total">
                        <select name="kategori" id="kategori">
                            <option value="upah">UPAH</option>
                            <option value="bahan">BAHAN</option>
                            <option value="alat">ALAT</option>
                        </select>
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
