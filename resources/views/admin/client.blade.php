{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Client</strong></h1>
<div class="container p-2">
    <div class="row">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row g-0">
                    <div class="col-12 col-sm-6 col-md-9 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header border-bottom" style="color: #cc3300; font-weight:700">
                                {{-- <div class="text-center">
                                    <img src="{{ asset('img/alat.jpg') }}" alt="user-avatar" class="img-circle shadow img-fluid ">
                                </div> --}}
                                <div class="container-fluid text-center">
                                    Nama :
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                {{-- <span class="lead text-center"><b class=" border-bottom" style="color: #cc3300; font-weight:700"></b></span> --}}
                                <div class="row m-3">
                                    <p class="text-muted text-sm"><b>Pemilik: </b>  </p><br>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: </li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card-footer rounded-bottom" style="background: #591b069d">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="/admin/proyek/" class="btn btn-sm btn-info">
                                        <i class="fas fa-user"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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