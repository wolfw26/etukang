<div>
    <div class="container-fluid border border-dark p-1 m-3 rounded">
        <div class="row">
            <div class="col-4">
                <table class="table">
                    <tr>
                        <th>Proyek : </th>
                        <td>{{ $proyek->nama_proyek }}</td>
                    </tr>
                    <tr>
                        <th>Tukang : </th>
                        @if ( $tukang && $tukang->count() > 0)
                        @if ( $tukang->nama != null)
                        <td>{{ $tukang->nama }}</td>
                        @else
                        <td>Belum ada</td>
                        @endif
                        @endif
                    </tr>
                    <tr>
                        <th>Client : </th>
                        <td class=" text-capitalize">{{ $client->nama }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <table class="table table-bordered">
                                    <div class="mb-1 text-center">
                                        <h5>Daftar Material</h5>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Material</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $material as $m )
                                        <tr>
                                            <td>{{ date('d-M-Y',strtotime($m->tanggal)) }}</td>
                                            <td>{{ $m->nama_material }}</td>
                                            <td>{{ $m->jumlah }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <div class="mb-1 text-center">
                                    <h5>Daftar Pekerjaan</h5>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Deskripsi Pekerjaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $absen as $absens )
                                        <tr class="text-center">
                                            <td>{{ date('d-M-Y',strtotime($absens->tanggal)) }}</td>
                                            <td>{{ $absens->deskripsi }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="mb-1 text-center">
                                            <h5>Rencana Pekerjaan</h5>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th width="300px">Keterangan</th>
                                                    <th>Tgl. Mulai</th>
                                                    <th>Tgl. Selesai</th>
                                                    <th>Status <br> Pekerjaan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $rencana as $rencanas )
                                                <tr>
                                                    <td>{{ $rencanas->keterangan }}</td>
                                                    <td>{{ date('d-M-Y',strtotime($rencanas->tanggal_mulai)) }}</td>
                                                    <td>{{ date('d-M-Y',strtotime($rencanas->tanggal_selesai)) }}</td>
                                                    <td>{{ $rencanas->status }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-5">
                                        <div class="mb-1 text-center">
                                            <h5>RAB</h5>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th width="200px">Rincian</th>
                                                    <th>Volume</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $rab->datarab as $data )
                                                <tr>
                                                    <td>{{ $data->rincian }}</td>
                                                    <td>{{ $data->volume }}</td>
                                                    <td>{{ 'Rp. '. number_format($data->harga_satuan) }} <br> {{ $data->satuan }}</td>
                                                    <td>{{ 'Rp.'. number_format($data->total) }}</td>
                                                </tr>
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
        </div>
    </div>
    <script>
        window.print();
    </script>
</div>
