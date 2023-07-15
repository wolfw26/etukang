@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="row d-flex flex-col justify-content-center pt-4">
        <div class="col-md-8 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card elevation-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-12  d-flex flex-col justify-content-center">
                                    <img class=" img-fluid elevation-2 rounded" src="{{ asset($data->image) }}" alt="" style="width: 400px; height:400px">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="alert alert-default-info mb-3">
                                        <h3 class=" text-center">{{ $data->title }}</h3>
                                    </div>
                                    <div class="container-fluid">
                                        <p class=" text-muted">{{ $data->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
