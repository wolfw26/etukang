<div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Kode</th>
                            <th>Deskripsi</th>
                            <th>Tanggal <br> Invoice</th>
                            <th>Tanggal <br> Jth. Tempo</th>
                            <th>Dari</th>
                            <th>Total Harga</th>
                            <th>Total Dibayar</th>
                            <th>Sisa Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $d )
                        <tr>
                            <th scope="col">{{ $d->kode }}</th>
                            <td scope="col" class=" text-capitalize">{{ $d->deskripsi }}</td>
                            <td scope="col">{{ date('d-M-Y',strtotime($d->tanggal_invoice)) }}</td>
                            <td scope="col">{{ date('d-M-Y',strtotime($d->tanggal_japo)) }}</td>
                            <td scope="col">{{ $d->dari }}</td>
                            <td scope="col">{{ 'Rp. '. number_format($d->total) }}</td>
                            <td scope="col">{{ 'Rp. '. number_format($d->dibayar) }}</td>
                            <td scope="col">{{ 'Rp. '. number_format($d->sisa) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        window.print()
    </script>
</div>
