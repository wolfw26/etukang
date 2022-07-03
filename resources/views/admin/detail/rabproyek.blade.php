@extends('component.template')
@section('konten')
<div class="row bg-lightblue">
    <div class="col-12">
        @if (session('kosong'))
        <div class="alert alert-success d-flex justify-content-between">
            {{ session('kosong') }}
            <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
        </div>
        @endif
        <h1> {{ $data }} </h1>
    </div>
</div>
@endsection
