@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="row m-1 p-2">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box elevation-3 mt-2">
                <span class="info-box-icon bg-info elevation-0 shadow-2xl"><i class="fas fa-image"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Proyek</span>
                    <span class="info-box-number">
                        {{ $proyek }}
                        <!-- <small>%</small> -->
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 mt-2 elevation-3">
                <span class="info-box-icon bg-danger elevation-1 "><i class="fas fa-user-shield"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Tukang</span>
                    <span class="info-box-number">{{ $tukang }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 mt-2 elevation-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Client</span>
                    <span class="info-box-number">{{ $client }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 mt-2 elevation-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Pekerja</span>
                    <span class="info-box-number">{{ $pekerja }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="card shadow-md mb-4 p-3">
        Halaman Home
    </div>
    <div class=" border-3 border-dark">
        <div class="row">
            <div class="col col-md-8 border-dark">
                <div class="card">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/alat.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/batik-wayang.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/laptop.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pb-4">
                    <div class="card-header bg-cyan">
                        <div class="card-title text-uppercase">
                            Menu
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                A list item
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                A second list item
                                <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                A third list item
                                <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
