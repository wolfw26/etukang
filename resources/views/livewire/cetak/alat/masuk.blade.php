<div>
    <div class="container-fluid p-4 mt-0">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-secondary">
                    <div class="card-body">
                        <table class="table table-bordered border border-dark">
                            <thead>
                                <tr class="text-center">
                                    <th>Tanggal</th>
                                    <th>Kode</th>
                                    <th>Keterangan</th>
                                    <th>Merk</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Tempat Beli</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $masuk )
                                <tr class="text-center">
                                    <td>{{ date('d-M-Y', strtotime($masuk->tanggal)) }}</td>
                                    <td class="text-bold"> <i>{{ $masuk->kode }}</i> </td>
                                    <td class="text-bolder">{{ $masuk->keterangan }}</td>
                                    <td>{{ $masuk->merk }}</td>
                                    <td>{{ 'Rp. '. number_format($masuk->harga) }}/ {{ $masuk->satuan }}</td>
                                    <td>{{ $masuk->jumlah }}</td>
                                    <td>{{ 'Rp. ' .number_format($masuk->total_harga) }}</td>
                                    <td>{{ $masuk->tempat }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Script>
        window.print();
    </Script>
</div>
