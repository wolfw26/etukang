<div>
    @if ( $proyek && $proyek->count() > 0)


    <div class="container">
        <div class="card card-default elevation-2 mb-2">
            <div class="card-body p-2">
                <h3 class="text-center mb-3 border-bottom m-2 elevation-1 p-2">Proyek {{ $proyek->nama_proyek }}</h3>
                <div class="row">
                    <div class="col-5">
                        <table class="table mt-3">
                            <tbody>
                                <tr>
                                    <th> Pemilik : </th>
                                    <td>
                                        <h5 class=" text-muted text-ceneter">{{ $proyek->client->nama }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Kepala Tukang : </th>
                                    <td>
                                        <h5 class=" text-muted text-ceneter">{{ $proyek->pekerja->nama }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Alamat : </th>
                                    <td>
                                        <h5 class=" text-muted text-ceneter">{{ $proyek->alamat }}</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <table class="table mt-3">
                            <tbody>
                                <tr>
                                    <th> Panjang Bangunan : </th>
                                    <td>
                                        <h5 class=" text-muted text-ceneter">{{ $proyek->panjang_rumah}} M</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Lebar Bangunan : </th>
                                    <td>
                                        <h5 class=" text-muted text-ceneter">{{ $proyek->lebar_rumah }} M</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Perkiraan Waktu : </th>
                                    <td>
                                        <h5 class=" text-muted text-ceneter">{{ date('d-F-Y',strtotime($proyek->tanggal_mulai))}} <br> {{ date('d-F-Y',strtotime($proyek->tanggal_selesai)) }}</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="card card-default elevation-2 mb-2">
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-8">
                        <div class="alert alert-default-primary text-center elevation-1"> Catatan Pemilik</div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="150px">Keterangan</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $proyek->dataproyek as $dp )
                                <tr>
                                    <td>{{ $dp->keterangan }}</td>
                                    <td>{{ $dp->deskripsi }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="alert alert-default-info text-center elevation-1"> RAB Proyek</div>
                        @if ($proyek->rab && $proyek->rab->datarab->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th width="200">Rincian</th>
                                    <th width="50px">Volume</th>
                                    <th width="50px">Satuan</th>
                                    <th>Harga Satuan</th>
                                    <th width="150px">Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($proyek->rab->datarab as $rabdata )
                                <tr>
                                    <td>{{ $rabdata->rincian }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @else
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="alert alert-default-secondary text-center m-0"> Data RAB Kosong</div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-4">
                        <div class="alert alert-default-primary text-center elevation-1"> Rencana Kerja</div>
                        <table class="table table-bordered">
                            @if ( $proyek->rencanakerja && $proyek->rencanakerja->count() > 0)
                            <thead>
                                <tr>
                                    <th width="200px">Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ( $proyek->rencanakerja as $rk )
                                <tr>
                                    <td>{{ $rk->keterangan }}</td>
                                    <td>{{ $rk->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="alert alert-default-secondary text-center m-0"> Belum Ada Rencana</div>
                                </div>
                            </div>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-default-info">
        <h4 class=" text-center text-bold "> Belum Ada Proyek </h4>
    </div>
    @endif
</div>
