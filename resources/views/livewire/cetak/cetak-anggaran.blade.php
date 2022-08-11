<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Rincian</th>
                            <th>Volume</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $rab->datarab as $dr )
                        <tr class="text-center">
                            <td>{{ $dr->rincian }}</td>
                            <td>{{ $dr->volume }}</td>
                            <td>{{ $dr->satuan }}</td>
                            <td>{{ 'Rp. '. number_format($dr->harga_satuan) }}</td>
                            <td>{{ 'Rp. '. number_format($dr->total) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4 text-center">
                Banjarmasin, <i>{{ date('d-M-Y',strtotime($rab->tanggal)) }}</i> <br>
                <h6>Pemilik CV.Jaya Mandiri Contraktor</h6>
                <div class="m-4" style="height: 60px"></div>
                <span class="mt-5">ADMIN</span>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</div>
