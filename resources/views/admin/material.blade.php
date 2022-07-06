@extends('component.template')
@section('konten')

<div class="container">
    <h1>Halaman <strong style="color: brown;">Material</strong></h1>
    <div class="alert bg-gradient-navy">
        <div class="row">
            <div class="col-6">
                <button class="btn btn-success" data-toggle="modal" data-target="#TambahMaterial">Tambah</button>
            </div>
            <div class="col-6">
                @if (session('tambah'))
                <div class="alert alert-success d-flex justify-content-between">
                    {{ session('tambah') }}
                    <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                </div>
                @elseif (session('hapus'))
                <div class="alert alert-warning d-flex justify-content-between">
                    {{ session('hapus') }}
                    <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-green">Data Material</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Aksi</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Material</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Masuk</th>
                                <th scope="col">Keluar</th>
                                <th scope="col">stok akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d )
                            <tr>
                                <th scope="row">
                                    <a href=" /adm/material/d/{{ $d->id }} " onclick="return confirm('Hapus Data   {{ $d->nama_material }} ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href=" {{ Route('material.edit',$d->id) }} " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                </th>
                                <td> {{ $d->kode_material}}</td>
                                <td> {{ $d->nama_material}}</td>
                                <td> {{ $d->satuan}}</td>
                                <td> {{ $d->harga_satuan}}</td>
                                <td> {{ $d->stok}}</td>
                                <td> {{ $d->masuk}}</td>
                                <td> {{ $d->keluar}}</td>
                                <td> {{ $d->stok_akhir}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">{{ $data->links() }}</div>
            </div>
        </div>
        {{-- <div class="col-5">
            <div class="card">
                <div class="card-header">Data Material</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"> Next</div>
            </div>

        </div> --}}
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="TambahMaterial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Material</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('material.add') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama_material">1. Material </label>
                                <input type="text" class="form-control" id="nama_material" placeholder="material" name="nama_material">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating mb-3 mt-3">
                                <label for="satuan">2. satuan </label>
                                <input type="text" class="form-control" id="satuan" placeholder="satuan " name="satuan">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="harga_satuan">3. Harga Satuan </label>
                        <input type="integer" class="form-control" id="harga_satuan" placeholder="Harga Satuan .." name="harga_satuan">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
