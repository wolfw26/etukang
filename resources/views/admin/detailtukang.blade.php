@extends('component.template')
@section('konten')
<div class="container-fluid m-0">
    <div class="row p-4">
        <div class="col-5">
            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                    <p class="text-muted">
                        {{ $data->pendidikan }}
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                    <p class="text-muted"> {{ $data->alamat }} </p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Keahlian</strong>

                    <p class="text-muted">
                        <span class="tag tag-danger"> {{ $data->keahlian }} </span>
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Lain-Lain</strong>

                    <p class="text-muted"> {{ $data->lain }} </p>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col">
            <div class="card card-navy card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"> {{ $data->nama }} </h3>

                    <p class="text-muted text-center">Kepala Proyek / Tukang</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NO. KTP</b> <a class="float-right">{{ $data->no_ktp }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jenis Kelamin</b> <a class="float-right"> {{ $data->jk }} </a>
                        </li>
                        <li class="list-group-item">
                            <b>No. Telp</b> <a class="float-right"> {{ $data->no_telp }} </a>
                        </li>
                        <li class="list-group-item">
                            <b>Pendidikan</b> <a class="float-right"> {{ $data->pendidikan }} </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

@endsection
