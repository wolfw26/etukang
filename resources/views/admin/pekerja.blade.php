{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Pekerja</strong></h1>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Projects</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Nama pekerja
                    </th>
                    <th style="width: 30%">
                        Nama Tukang
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th style="width: 8%" class="text-center">
                        KTP
                    </th>
                    <th style="width: 20%">
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
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#Tambah">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
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
@endsection
