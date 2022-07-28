<div>
    @if ( $invoice && $invoice->count() > 0)


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
                        <th> <a href="" class="btn btn-outline-warning"> <i class="fas fa-print"></i> </a> </th>
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
                        @if ( $invoice && $invoice->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Tgl. invoice</th>
                                    <th>Tgl. Jth. Tempo</th>
                                    <th>No. </th>
                                    <th>Deskripsi</th>
                                    <th>Dari</th>
                                    <th>Total</th>
                                    <th>Dibayar</th>
                                    <th>Sisa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $invoice as $d )
                                <tr class="text-center">
                                    <td>{{ date('d-M-Y',strtotime($d->tanggal_invoice)) }}</td>
                                    <td>{{ date('d-M-Y',strtotime($d->tanggal_japo)) }}</td>
                                    <td>{{ $d->kode }}</td>
                                    <td>{{ $d->deskripsi }}</td>
                                    <td>{{ $d->dari }}</td>
                                    <td>{{ number_format($d->total) }}</td>
                                    <td>{{ number_format($d->dibayar) }}</td>
                                    <td>{{ number_format($d->sisa) }}</td>
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <th colspan="8"> Harga Total</th>
                                    <td class=" bg-gradient-warning"> {{ 'Rp.'. number_format($data->sum('harga_total')) }} </td>
                                </tr>
                                <tr>
                                    <th colspan="9"> Jumlah Dibayar</th>
                                    <td class=" bg-gradient-success"> {{'Rp.'. number_format($data->sum('dibayar')) }} </td>
                                </tr>
                                <tr>
                                    <th colspan="10"> Jumlah sisa Pembayaran</th>
                                    <td class=" bg-gradient-orange"> {{'Rp.'. number_format($data->sum('sisa')) }} </td>
                                </tr> --}}
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
    @else
    <div class="alert alert-warning"> Data Belum ada</div>
    @endif
</div>
