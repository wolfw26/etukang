<div>
    <div class="container-fluid m-2">
        <div class="row">
            <div class="col-12 p-2 border border-dark rounded">
                <h5 class="text-center text-capitalize">{{ $proyek->nama_proyek }}</h5>
                <table class="table">
                    <tr>
                        <th width="300px">Pemilik : </th>
                        <td class=" float-left">{{ $proyek->client->nama }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Alamat  : </th>
                        <td class=" float-left">{{ $proyek->client->alamat }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Kepala Tukang  : </th>
                        <td class=" float-left">{{ $proyek->pekerja->nama }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Proyek  : </th>
                        <td class=" float-left">{{ $proyek->nama_proyek }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Alamat Proyek  : </th>
                        <td class=" float-left">{{ $proyek->alamat }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Mulai Kerja  : </th>
                        <td class=" float-left">{{ date('d-F-Y',strtotime($proyek->tanggal_mulai)) }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Selesai Kerja  : </th>
                        <td class=" float-left">{{ date('d-F-Y',strtotime($proyek->tanggal)) }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Panjang Bangunan  : </th>
                        <td class=" float-left">{{ $proyek->panjang_rumah }} {{ $proyek->satuan }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Lebar Bangunan  : </th>
                        <td class=" float-left">{{ $proyek->lebar_rumah }} {{ $proyek->satuan }}</td>
                    </tr>
                    <tr>
                        <th width="300px">Biaya  : </th>
                        <td class=" float-left">{{ 'Rp. '. number_format($rab->jumlah) }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</div>
