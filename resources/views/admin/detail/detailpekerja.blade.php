@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="row p-0">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card card-navy card-outline m-2 elevation-2">
                <div class="card-body">
                    <div class="row p-0">
                        <div class="col-12">
                            <div class="text-center row-cols-2" style="padding: 0;">
                                {{-- <img class="profile-user-img img-fluid img-circle" src=" {{ asset( $data->image) }} " alt="User profile picture"> --}}
                                <img style="height: 250px ;" class=" shadow-2xl img-responsive img-bordered rounded-sm elevation-1" src=" {{ asset( $data->image) }} " alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <h3 class="profile-username text-center"> {{ $data->nama }}</h3>

                    <p class="text-muted text-center">{{ $data->jabatan->jabatan }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Tempat,Tanggal Lahir</b> <a class="float-right">{{ $data->tempat_lahir }},{{ $data->tgl_lahir }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>NO. KTP</b> <a class="float-right">05004083855365</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jenis Kelamin</b> <a class="float-right"> {{ $data->jenis_kelamin }} </a>
                        </li>
                        <li class="list-group-item">
                            <b>No. Telp</b> <a class="float-right"> {{ $data->nope }} </a>
                        </li>
                        <li class="list-group-item">
                            <b>Pendidikan</b> <span class="float-right text-uppercase text-primary"> {{ $data->pendidikan }} </h3>
                        </li>
                        <li class="list-group-item">
                            <b>Foto KTP</p> <br>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a><img src=" {{ asset($data->foto_ktp) }} " alt="" width="300px" height="200px"> </a>
                                    </div>
                                </div>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-2">

        </div>

    </div>
</div>

@endsection
