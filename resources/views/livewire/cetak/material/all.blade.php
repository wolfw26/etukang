<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card card-outline card-secondary">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Material</th>
                                    <th>Harga Satuan</th>
                                    <th>Stok</th>
                                    <th>Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $materials as $material )
                                <tr>
                                    <td> {{ $material->kode_material }} </td>
                                    <td>{{ $material->nama_material }}</td>
                                    <td>{{ 'Rp. '. $material->harga_satuan }}</td>
                                    <td>{{ $material->stok_akhir }}</td>
                                    <td>
                                        <div class="badge badge-secondary">{{ $material->satuan }}</div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</div>
