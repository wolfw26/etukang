<div>
    <div class="container-fluid p-2">
        <div class="row mb-3">
            <div class="col-12">
                <div class="alert alert-secondary elevation-2 text-center text-capitalize"> Laporan Sewa Alat</div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <table class="table table-bordered">
                    <tr>
                        <th> Tanggal Mulai</th>
                        <th> Tanggal selesai</th>
                    </tr>
                    <tr>
                        <td> <input wire:model="tglawal" type="date" class="form-control form-control-sm"> </td>
                        <td> <input wire:model="tglakhir" type="date" class="form-control form-control-sm"> </td>
                        <td> <button wire:click=" cari" class="btn btn-sm btn-success"> <i class="fas fa-search"></i> </button></td>
                    </tr>
                </table>
            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-navy">
                    <div class="card-body">
                        @if ( $data && $data->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Deskripsi <br> Merk</th>
                                    <th>Tempat <br> Sewa</th>
                                    <th>Tanggal <br> Mulai</th>
                                    <th>Tanggal <br> Selesai</th>
                                    <th>Harga Satuan/satuan</th>
                                    <th>Jumlah <br> Hari</th>
                                    <th>Jumlah <br> Alat</th>
                                    <th>Total</th>
                                    <th>Dibayar</th>
                                    <th>Sisa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $sewa )
                                <tr>
                                    <td class="text-center text-bold">{{ $sewa->kode }}</td>
                                    <td class="text-capitalize">{{ $sewa->deskripsi }} <br> {{ $sewa->merk }}</td>
                                    <td>{{ date('d-M-Y', strtotime($sewa->tanggal_mulai)) }}</td>
                                    <td>{{ date('d-M-Y', strtotime($sewa->tanggal_selesai)) }}</td>
                                    <td>{{ 'Rp.' . number_format($sewa->harga) }}/{{ $sewa->satuan }}</td>
                                    <td>{{ $sewa->jumlah_hari }}</td>
                                    <td>{{ $sewa->jumlah }}</td>
                                    <td>{{ 'Rp. '. number_format($sewa->harga_total) }}</td>
                                    <td>{{ 'Rp. '. number_format($sewa->dibayar) }}</td>
                                    <td>{{ 'Rp. '. number_format($sewa->sisa) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th colspan="8"> Harga  Total</th>
                                    <td class=" bg-gradient-warning"> {{ 'Rp.'. number_format($data->sum('harga_total')) }} </td>
                                </tr>
                                <tr>
                                    <th colspan="9"> Jumlah Dibayar</th>
                                    <td class=" bg-gradient-success" > {{'Rp.'. number_format($data->sum('dibayar')) }} </td>
                                </tr>
                                <tr>
                                    <th colspan="10"> Jumlah sisa Pembayaran</th>
                                    <td class=" bg-gradient-orange" > {{'Rp.'. number_format($data->sum('sisa')) }} </td>
                                </tr>
                            </tbody>
                        </table>
                        @else
                        <div class="callout callout-success">
                            <h5>Data Sewa Alat</h5>
                            <p>Silahkan Sortir Tanggal</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
