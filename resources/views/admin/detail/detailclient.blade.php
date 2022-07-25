@extends('component.template')
@section('konten')
<div class="container-fluid m-0">
    <div class="row p-4">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card card-navy card-outline elevation-2">
                <div class="card-body box-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid rounded" src=" {{ asset( $data->foto_ktp) }} " alt="User profile picture" width="300px" height="300px">
                            </div>
                        </div>
                    </div>

                    <h3 class="profile-username text-center"> {{ $data->nama }} </h3>

                    <p class="text-muted text-center">{{ $data->alamat }}</p>

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
                            <b>Ttl</b> <a class="float-right"> {{ $data->tempat_lahir }} {{ $data->tgl_lahir }} </a>
                        </li>
                        <li class="list-group-item">
                            <b>Foto KTP</b> <br>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a class=""> <img src=" {{ asset($data->foto_ktp) }} " alt="" width="200px" height="200px"> </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-1">

        </div>

    </div>
</div>
@endsection
