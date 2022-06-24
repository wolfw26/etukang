{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Pekerja</strong></h1>

<div class="card m-2">
    <div class="card-header">
        <div class="row">
            <div class="container-fluid p-0  d-flex justify-content-between">
                <div class="col-7"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahPekerja">
                        Tambah
                    </button> <br></div>
                <div class="col-5 d-sm-flex justify-content-center ">
                    <a href="{{ url()->previous() }}" class="btn-sm  m-2 p-1"> <i class=" fas fa-arrow-left"> </i> </a> <br>
                    <form action="/adm/pekerja">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" name="cari" value=" {{ request('cari') }} ">
                            <button class="btn btn-outline-warning bg-navy" type="submit" id="button-addon2">cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div> -->
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 15%">
                        Nama pekerja
                    </th>
                    <th style="width: 20%">
                        Nama Tukang
                    </th>
                    <th style="width: 15%">
                        Alamat
                    </th>
                    <th style="width: 3%" class="text-center">
                        KTP
                    </th>
                    <th style="width: 20%">
                        Proyek
                    </th>
                    <th style="width: 20%">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $data as $d )
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            <strong class=" text-uppercase" style="color: rgb(15, 3, 105) ">{{ $d->nama_pekerja }}</strong>
                        </a>
                        <br />
                        <small>
                            Created {{ $d->created_at }}
                        </small>
                    </td>
                    <td>
                        <p>{{ $d->tukang->nama }}</p>
                    </td>
                    <td class="project_progress">
                        <p>{{ $d->alamat }}</p>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">{{ $d->foto_ktp }}</span>
                    </td>
                    <td class="project-state">
                        @foreach ($d->tukang->proyek as $p )
                        <strong>
                            {{ $p->nama_proyek }}
                        </strong>
                        <p>{{ $p->alamat }}</p>
                        @endforeach
                    </td>
                    <td class="project-actions text-right">
                        <a class="badge badge-primary btn-sm" href="/adm/pekerja/{{ $d->id }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="badge badge-info btn-sm" href="#" data-toggle="modal" data-target="#Tambah">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="badge badge-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach

        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="TambahPekerja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header  bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Pekerja</h5>
            </div>
            <div class="modal-body">
                <form action="/admin/pekerja" method="post">
                    @csrf
                    <div class="form-floating mb-3 mt-3">
                        <label for="nama">1. Nama </label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Tukang" name="nama">
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="alamat">2. Alamat </label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat">
                    </div>
                    <div class="custom-file">
                        <label for="customFile">4. Foto KTP</label>
                        <input type="file" class="custom-file-input" id="customFile" name="customFile">
                        <label class="custom-file-label" for="customFile"> Foto KTP</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="">6. Jenis Kelamin</label>
                        <select class="form-select form-control" id="jk" name="jk">
                            <option class=" active" disabled>Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="pembangunan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="no_telp">7. No Telp. </label>
                        <input type="number" class="form-control" id="no_telp" placeholder="No Telpon aktif ..." name="no_telp">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->
@endsection
