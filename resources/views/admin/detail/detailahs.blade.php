{{-- @dd($ahs->id) --}}
@extends('component.template')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Data AHS</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-green"></div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Aksi</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Volume</th>
                                                <th scope="col">Satuan</th>
                                                <th scope="col">Harga Satuan</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $data as $d )
                                            <tr class="text-uppercase">
                                                <th scope="row">
                                                    <a href="{{ route('dataahs.delete',$d->id) }}" onclick="return confirm('Hapus Data');" class="btn btn-sm bg-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href=" " class="btn btn-sm bg-teal">
                                                        <i class="fas fa-edit" title="Edit"></i>
                                                    </a>
                                                </th>
                                                <td class="text-uppercase">{{ $d->kategori }}</td>
                                                <td>{{ $d->rincian }}</td>
                                                <td>{{ $d->volume }}</td>
                                                <td>{{ $d->satuan }}</td>
                                                <td>{{ number_format($d->harga_satuan,2)  }}</td>
                                                <td>{{ number_format($d->total,2)  }}</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="container-fluid border border-dark">
                                        <div class="row">
                                            <div class="col-10 text-bold">Total Upah</div>
                                            <div class="col-2 text-bold text-muted bg-info text-center"> {{number_format( $ahs->total_upah,2)}} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10 text-bold">Total Bahan</div>
                                            <div class="col-2 text-bold text-muted bg-info text-center"> {{number_format( $ahs->total_bahan,2) }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10 text-bold">Total</div>
                                            <div class="col-2 text-bold text-muted bg-info text-center"> {{ number_format($data->sum('total'),2)  }} </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-toggle="modal" data-target="#TambahAhs">Tambah</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="TambahAhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data AHS</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('dataahs.add', $ahs->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama_material">Keterangan</label>
                                <input type="text" class="form-control" id="nama_material" placeholder="Rincian" name="nama_material">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating mb-3 mt-3">
                                <label for="satuan">Satuan</label>
                                <input type="text" class="form-control" id="satuan" placeholder="satuan " name="satuan">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="volume">Koefisien</label>
                        <input type="integer" class="form-control" id="volume" placeholder="0.000" name="volume">
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="integer" class="form-control" id="harga_satuan" placeholder="Harga Satuan .." name="harga_satuan">
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="jenis_proyek">Jenis Data</label>
                        <select class="form-select form-control" id="jenis_proyek" name="jenis_proyek">
                            <option class=" active" disabled>Jenis-Data</option>
                            <option value="upah">Upah</option>
                            <option value="bahan">Bahan</option>
                            <option value="alat">Alat</option>
                        </select>
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
