@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="row d-flex flex-col justify-content-center">
        <div class="col-md-10 p-3">
            <div class="alert-default-primary text-center">
                <h2 class=" text-center p-3">PENGADUAN PELANGGAN</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card elevation-3">
                        <div class="card-body p-2">
                            @foreach ( $data as $d )
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card elevation-2 p-3">
                                        <div class="row">
                                            <div class="col-md-4 text-center"> <h5>{{ $d->title }} </h5></div>
                                            <div class="col-md-4">
                                                <i class=" text-muted">{{ $d->deskripsi }}</i>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <img class=" img-fluid" src="{{ asset($d->image) }}" alt="" style="width: 100px; height: 100px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class=" btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                <a href="{{ route('pengaduan.show',$d->id) }}" class=" btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <button class=" btn btn-sm btn-danger"><i class=" fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
