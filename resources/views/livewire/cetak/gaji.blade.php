<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class=" text-center">
                            <th>Tanggal</th>
                            <th>Nama Pekerja</th>
                            <th>Dari.</th>
                            <th>Sampai.</th>
                            <th>Jumlah Hari</th>
                            <th>Gaji Pokok</th>
                            <th>Lembur</th>
                            <th>Bonus</th>
                            <th>Potongan</th>
                            <th>Total</th>
                            <th>Dibayar</th>
                            <th>Sisa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $gaji as $gajis )
                        <tr class=" text-center">
                            <td>{{ date('d-M-Y',strtotime($gajis->tanggal)) }}</td>
                            <td>{{ $gajis->nama_pekerja }}</td>
                            <td>{{ date('d-M-Y',strtotime($gajis->tanggalAwal)) }}</td>
                            <td>{{ date('d-M-Y',strtotime($gajis->tanggalAkhir)) }}</td>
                            <td>{{ $gajis->hari }}</td>
                            <td>{{ 'Rp. '. number_format($gajis->gapok) }}</td>
                            <td>{{ $gajis->lembur }}</td>
                            <td>{{ 'Rp. '. number_format($gajis->bonus) }}</td>
                            <td>{{ 'Rp. '. number_format($gajis->potongan) }}</td>
                            <td>{{ 'Rp. '. number_format($gajis->total) }}</td>
                            <td>{{ 'Rp. '. number_format($gajis->dibayar) }}</td>
                            <td>{{ 'Rp. '. number_format($gajis->sisa) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
