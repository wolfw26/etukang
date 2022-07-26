<div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-secondary">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kode <br> Material</th>
                                <th>Nama <br> Material</th>
                                <th>Jumlah <br> Awal</th>
                                <th>Jumlah <br> Masuk</th>
                                <th>Satuan</th>
                                <th>Harga <br> Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $data as $materials )
                            <tr>
                                <td>{{ date('d-M-Y',strtotime($materials->tanggal)) }} </td>
                                <td class="text-bold">{{ $materials->kode_material }}</td>
                                <td>{{ $materials->nama_material }}</td>
                                <td class="text-center">{{ $materials->stok_awal }}</td>
                                <td class="text-right">{{ $materials->jumlah }}</td>
                                <td class="text-left">
                                    <div class="badge badge-success">{{ $materials->satuan }}</div>
                                </td>
                                <td>{{ $materials->harga_satuan }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print()
    </script>
</div>
