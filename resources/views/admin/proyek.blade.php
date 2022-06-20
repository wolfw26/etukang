{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<div class="card-header mb-3">
    <a href="http://" class="btn btn-outline-success" data-toggle="modal" data-target="#Tambah">Tambah</a>
</div>

<div class="row">
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row g-0">
                @foreach ( $data as $d )
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div>
                        <div class="card-body pt-0">

                            <div class="text-center">
                                <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid ">
                            </div>
                            <h2 class="lead text-center"><b>{{ $d->nama_proyek }}</b> <br>
                            {{ $d->tanggal_proyek }}</h2>
                            <div class="row">

                                <p class="text-muted text-sm"><b>Pemilik: </b> {{ $d->client->nama }} </p>
                                <p class="text-muted text-sm"><b>Alamat: </b> {{ $d->alamat }} </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: {{ $d->alamat }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                </ul>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="/admin/proyek/{{ $d->id }}" class="btn btn-sm btn-primary">
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
@endsection
