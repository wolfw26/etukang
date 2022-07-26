<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-warning">
                            <tr class="text-center">
                                <th>Kode</th>
                                <th>Nama <br> Material</th>
                                <th>Harga <br> Satuan</th>
                                <th>Material <br> Masuk</th>
                                <th>Material <br> Keluar</th>
                                <th>Stok</th>
                                <th>Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $data as $materials )
                            <tr>
                                <td> {{ $materials->kode_material }} </td>
                                <td>{{ $materials->nama_material }}</td>
                                <td class="text-center">{{ 'Rp. '. $materials->harga_satuan }}</td>
                                <td class="text-center">{{ $materials->materialin->sum('jumlah') }}</td>
                                <td class="text-center">{{ $materials->materialout->sum('jumlah') }}</td>
                                <td>{{ $materials->stok_akhir }}</td>
                                <td>
                                    <div class="badge badge-secondary">{{ $materials->satuan }}</div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</div>
