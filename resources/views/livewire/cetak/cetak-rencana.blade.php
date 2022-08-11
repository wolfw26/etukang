<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Keterangan </th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $rencana as $d )
                        <tr class="text-center">
                            <td>{{ $d->keterangan }}</td>
                            <td>{{ date('d-F-Y',strtotime($d->tanggal_mulai)) }}</td>
                            <td>{{ date('d-F-Y',strtotime($d->tanggal_selesai)) }}</td>
                            <td>{{ $d->status }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</div>
