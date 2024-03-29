@extends('component.template')

@section('konten')
<div class="container p-3 ">
    <div class="callout callout-info text-center">
        <h5 class=" font-bold text-center">Daftar RAB</h5>
    </div>
    <div class="row bg-gray-light p-0">
        <div class="col-12">
            <div class="card card-outline card-navy">
                <div class="card-header  d-flex justify-content-between">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-9">Daftar RAB</div>
                            <div class="col-3">
                                <button type="button" class="btn btn-primary align-content-end" data-toggle="modal" data-target="#TambahRab">
                                    Tambah
                                </button> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="w-10 p-3">Aksi</th>
                                <th scope="col" class="w-25 p-3">Nama</th>
                                <th scope="col" class="w-25 p-3">Kode RAB</th>
                                <th scope="col">Nama Proyek</th>
                                <th scope="col">Total Harga</th>

                                <th scope="col">Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d )
                            @if ($d->status == null || $d->status == 'perbaiki' || $d->status == 'selesai')
                            <tr>
                                <th scope="col">
                                    <a href="{{ route('rab.delete',$d->id) }}" onclick="return confirm('Hapus Data {{ $d->nama_rab }}  ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="  " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                    <a href="{{ route('rab.view',$d->id) }}" class="btn btn-sm bg-success">
                                        <i class="fas fa-eye" title="view"></i>
                                    </a>
                                </th>
                                <td>{{ $d->nama_rab }}</td>
                                <td class=" text-bold">{{ $d->kode_rab }} <br> {{ $d->proyekrab->client->nama }}</td>

                                <td>{{ $d->proyekrab->nama_proyek}}</td>
                                <td>{{ 'Rp. '. number_format($d->jumlah)}}</td>
                                <td>
                                    @if ($d->status == null)
                                    <a href="{{ route('rab.konfirmasi',$d->id) }}" class="btn btn-outline-success btn-sm" title="Konfirmasi Ke Client"> <i class=" fas fa-arrow-circle-up p-2 "></i> </a>
                                    @elseif ($d->status == 'perbaiki')
                                    <a href="{{ route('rab.konfirmasi',$d->id) }}" class="btn btn-outline-primary btn-sm" title="Konfirmasi Ke Client"> <i class=" fas fa-arrow-circle-up p-2 "></i> </a>
                                    @elseif ($d->status == 'selesai')
                                    <div class="badge badge-pill badge-primary">Menunggu Persetujuan</div>
                                    @endif
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="callout callout-success text-center">
        <h5 class=" font-bold">RAB Di Setujui</h5>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="card card-outline card-success">
                <div class="card-header d-flex justify-content-between">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-9">Rab Diterima</div>
                            <div class="col-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="w-10 p-3">Aksi</th>
                                <th scope="col" class="w-25 p-3">Nama</th>
                                <th scope="col" class="w-25 p-3">Kode RAB</th>
                                <th scope="col">Nama Proyek</th>
                                <th scope="col">Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d )
                            @if ($d->status == 'setuju')
                            <tr>
                                <th scope="col">
                                    <a href="{{ route('rab.delete',$d->id) }}" onclick="return confirm('Hapus Data {{ $d->nama_rab }}  ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="  " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                    <a href="{{ route('rab.view',$d->id) }}" class="btn btn-sm bg-success">
                                        <i class="fas fa-eye" title="view"></i>
                                    </a>
                                </th>
                                <td>{{ $d->nama_rab }}</td>
                                <td class=" text-bold">{{ $d->kode_rab }}</td>

                                <td>{{ $d->proyekrab->nama_proyek}}</td>
                                <td>
                                    <div class="badge badge-pill badge-success shadow-sm"> Disetujui </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="TambahRab">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah RAB</h5>
            </div>
            <form action="{{ route('rab.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input class="form-control form-control-sm m-1" type="text" placeholder="Nama RAB" id="nama_rab" name="nama_rab">
                    <input class="form-control form-control-sm m-1" type="text" placeholder="Kode" id="kode_rab" name="kode_rab">
                    <select class="form-control form-select m-1" id="proyek_id" name="proyek_id">
                        <option selected>Pilih Proyek</option>
                        @foreach ( $proyek as $p )
                        <option value="{{ $p->id }}">{{ $p->nama_proyek }} {{ '('. $p->client->nama . ')' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
