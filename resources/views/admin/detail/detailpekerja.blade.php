@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="row p-0">
        <div class="col-7">
            <div class="card card-navy card-outline">
                <div class="card-body">
                    <div class="row p-0">
                        <div class="col-12">
                            <div class="text-center row-cols-3 ">
                                {{-- <img class="profile-user-img img-fluid img-circle" src=" {{ asset( $data->image) }} " alt="User profile picture"> --}}
                                <img class=" shadow-2xl img-fluid img-bordered rounded-circle" src=" {{ asset( $data->image) }} " alt="User profile picture">
                            </div>
                        </div>
                    </div>


                    <h3 class="profile-username text-center"> {{ $data->nama }}</h3>

                    <p class="text-muted text-center">{{ $data->tempat_lahir }}, {{ $data->tgl_lahir }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NO. KTP</b> <a class="float-right">05004083855365</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jenis Kelamin</b> <a class="float-right"> {{ $data->jk }} </a>
                        </li>
                        <li class="list-group-item">
                            <b>No. Telp</b> <a class="float-right"> {{ $data->nope }} </a>
                        </li>
                        <li class="list-group-item">
                            <b>Pendidikan</b> <span class="float-right text-uppercase text-primary"> {{ $data->pendidikan }} </h3>
                        </li>
                        <li class="list-group-item">
                            <b>Foto KTP</p> <br> <a class="text-center">
                            <img src=" {{ asset($data->foto_ktp) }} " alt="" width="300px" height="200px"> </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col">
            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-center">Data Pekerjaan</h3>
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
                        <span class="tag tag-danger">  </span>
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Lain-Lain</strong>

                    <p class="text-muted"> </p>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
</div>

@endsection
