@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Tukang</strong></h1>
<div class="card m-2">
    <div class="card-header d-flex justify-content-between">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahTukang">
            Tambah
        </button> <br>
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
                        Nama Tukang
                    </th>
                    <th style="width: 20%">
                        Alamat
                    </th>
                    <th style="width: 15%">
                        KTP
                    </th>
                    <th style="width: 3%" class="text-center">
                        Foto KTP
                    </th>
                    <th style="width: 20%">
                        Jenis Kelamin
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
                        <strong>{{ $d->nama }}</strong>
                    </td>
                    <td class="project_progress">
                        <p>{{ $d->alamat }}</p>
                    </td>
                    <td class="project-state">
                        <span>{{ $d->no_ktp }} </span>
                    </td>
                    <td class="project-state">
                        <span>{{ $d->foto_ktp }} </span>
                    </td>
                    <td class="project-state">
                        <span>{{ $d->jk }} </span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="badge badge-primary btn-sm" href="/detail">
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
<div class="modal fade" id="TambahTukang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header  bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Client</h5>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3 mt-3">
                    <label for="nama">1. Nama </label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Tukang" name="nama">
                </div>
                <div class="form-floating mb-3 mt-3">
                    <label for="alamat">2. Alamat </label>
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat">
                </div>
                <div class="form-floating mb-3 mt-3">
                    <label for="no_ktp">3. No KTP </label>
                    <input type="number" class="form-control" id="no_ktp" placeholder="No KTP ..." name="no_ktp">
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
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->
@endsection
