<div>
    <div class="container-fluid">
        <div class="row m-1 p-2">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box elevation-3 mt-2">
                    <span class="info-box-icon bg-info elevation-0 shadow-2xl"><i class="fa-solid fa-person-digging"></i></span>
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
                    <span class="info-box-icon bg-secondary elevation-1 d-flex justify-content-center">
                        <i class="fas fa-mound"></i> <p><i class="fas fa-mound text-dark"></i></p></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Meterial</span>
                        <span class="info-box-number">{{ $material->count() }}</span>
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
                        <span class="info-box-number">{{ $pekerja->count() }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row m-1 p-2">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3 mt-2 elevation-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-truck-pickup"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sewa Alat</span>
                        <span class="info-box-number">{{ $sewa->count() }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->
        <div class="callout callout-info">
            <h5>Selamat Datang Admin {{ Auth::user()->name }}</h5>

            <p>Sistem Informasi Jasa Pembangunan , Membantu Melakukan Pembuatan AHSP,RAB, Penanganan Data Proyek , Pemantauan Kerja Pekerja dan Pengelolaan Material dan Alat </p>
        </div>
        <div class=" border-3 border-dark">
            <div class="row">
                <div class="col col-md-8 border-dark">
                    @if ( $sewa && $sewa->count() > 0)

                            <div class="card card-outline card-navy">
                                <div class="card-header">
                                    Data Menyewa Alat
                                </div>
                                <div class="card-body table-responsive p-0"style="height: 570px;">
                                    <table class="table table-bordered table-hover table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nama Alat</th>
                                                <th>Harga Satuan</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        @foreach ( $sewa as $sewas )
                                        <tr>
                                            <td>{{ $sewas->deskripsi  }}</td>
                                            <td>{{ $sewas->harga  }}/{{ $sewas->satuan  }}</td>
                                            <td>{{ $sewas->tanggal_mulai  }}</td>
                                            <td>{{ $sewas->tanggal_selesai  }}</td>
                                            <td>{{ $sewas->jumlah  }}{{ $sewas->satuan  }}</td>
                                            <td>{{ 'Rp. '. number_format($sewas->harga_total)  }}</td>
                                            {{-- <td>{{ Carbon\carbon::parse(now()->format('d-m-Y'))->diffInDays($sewas->tanggal_selesai,false) }}</td> --}}

                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                    @endif
                </div>
                <div class="col-4">
                    <div class="card card-outline card-warning">
                        <div class="card-header text-center">Stok Material Habis</div>
                        <div class="card-body p-2 table-responsive p-0"style="height: 570px;">
                            <div class="table-responsive" >
                                <table class="table table-bordered table-hover table-head-fixed text-nowrap">
                                    <tbody>
                                        @foreach ( $material as $materials )
                                        @if ( $materials->stok_akhir < 5) <tr>
                                            <td>{{ $materials->nama_material }}</td>
                                            <td class="text-center">
                                                <div class="badge badge-pill badge-danger">
                                                    @if ( $materials->stok_akhir < 1 ) kosong @else {{ $materials->stok_akhir }}-{{ $materials->satuan }} @endif </div>
                                            </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
