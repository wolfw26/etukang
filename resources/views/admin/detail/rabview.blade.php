@extends('component.template')
@section('konten')
<div class="container-fluid">

    <div class="row m-2">
        <div class="col-6">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Volume</th>
                        <th scope="col" class="w-35 ">Pilih AHS</th>
                        <th scope="col" class="w-20 ">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="{{ route('rab.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="rab_id" id="rab_id" value="{{ $rab_id }}">
                            <td>
                                <div class="form-floating">
                                    <input type="text" name="volume_rab" id="volume_rab" placeholder="Volume Pekerjaan">
                                </div>
                            </td>
                            <td>
                                <select class="form-select form-control" id="ahs" name="ahs" required>
                                    <option class=" active" disabled>AHS</option>
                                    @foreach ( $ahs as $d )
                                    <option value="{{ $d->id }}">{{ $d->kode_ahs }} - {{ $d->nama_ahs }}</option>
                                    @endforeach


                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i></button>
                            </td>
                        </form>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Aksi</th>
                        <th scope="col">Rincian</th>
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
                            <a href="" onclick="return confirm('Hapus Data');" class="btn btn-sm bg-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                            <a href=" " class="btn btn-sm bg-teal">
                                <i class="fas fa-edit" title="Edit"></i>
                            </a>
                        </th>
                        <td class="text-uppercase"></td>
                        <td>{{ $d->rincian }}</td>
                        <td>{{ $d->volume }}</td>
                        <td>{{ $d->satuan }}</td>
                        <td>{{ $d->harga_satuan }}</td>
                        <td>{{ $d->total }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- <div class="card">
        <div class="card-header bg-green">Data AHS</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Aksi</th>
                        <th scope="col">Rincian</th>
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
                            <a href="" onclick="return confirm('Hapus Data');" class="btn btn-sm bg-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                            <a href=" " class="btn btn-sm bg-teal">
                                <i class="fas fa-edit" title="Edit"></i>
                            </a>
                        </th>
                        <td class="text-uppercase"></td>
                        <td>{{ $d->rincian }}</td>
                        <td>{{ $d->volume }}</td>
                        <td>{{ $d->satuan }}</td>
                        <td>{{ $d->harga_satuan }}</td>
                        <td>{{ $d->total }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container-fluid border border-dark">
                <div class="row">
                    <div class="col-10 text-bold">Total Upah</div>
                    <div class="col-2 text-bold text-muted bg-info text-center"> </div>
                </div>
                <div class="row">
                    <div class="col-10 text-bold">Total Bahan</div>
                    <div class="col-2 text-bold text-muted bg-info text-center"> </div>
                </div>
                <div class="row">
                    <div class="col-10 text-bold">Total</div>
                    <div class="col-2 text-bold text-muted bg-info text-center"> </div>
                </div>
            </div>
        </div>
        <button data-toggle="modal" data-target="#TambahAhs">Tambah</button>
    </div> -->
</div>
@endsection
