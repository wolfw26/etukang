{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Client</strong></h1>
<div class="row">
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row g-0">
                    @foreach ( $data as $d )
                    <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill" style="width: 30vh">
                            <div class="card-header border-bottom text-center" style="color: #cc3300; font-weight:700">
                                {{ $d->nama }}
                            </div>
                            <div class="card-body pt-0">
                                <div class="text-center">
                                    <img src="{{ asset('img/alat.jpg') }}" alt="user-avatar" class="img-circle shadow img-fluid " style="width: 120px; height:120px">
                                </div>
                                <div class="row mt-2">
                                    <div class="container-fluid">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"> <strong>Alamat:</strong> {{ $d->alamat }}</li>
                                            <li class="small"> <strong>Phone :</strong> {{ $d->no_telp }}</li>
                                            <li class="small"> <strong>Jenis-Kelamin :</strong> {{ $d->jk }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="/admin/client/show/{{ $d->id }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- /card -->
                </div>
                <!-- /row -->
            </div>
            <!-- /card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /card-solid -->
    </div>
</div>

@endsection
