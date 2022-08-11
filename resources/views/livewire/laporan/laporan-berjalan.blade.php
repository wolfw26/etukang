<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info text-center">
                    <h5>Laporan Proyek Berjalan</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-info">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Proyek</th>
                                <th>Alamat</th>
                                <th>Luas Bangunan</th>
                                <th>Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ( $proyek && $proyek->count() > 0)
                            @foreach ( $proyek as $p )
                            <tr>
                                <td>{{ $p->nama_proyek }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->panjang_rumah }} x {{ $p->lebar_rumah }}</td>
                                <td>{{ $p->satuan }}</td>
                                <td>
                                    <a href="{{ route('cetak.berjalan',$p->id) }}" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
