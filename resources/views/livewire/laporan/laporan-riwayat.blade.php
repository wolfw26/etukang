<div>
    <div class="container p-2">
        <div class="alert alert-default-primary elevation-2 text-center mb-3">
            <h4> Laporan Riwayat Proyek </h4>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <table class="table">
                    <tr>
                        <th> Tgl.Awal</th>
                        <th> Tgl.Akhir</th>
                    </tr>
                    <tr>
                        <td> <input wire:model="tglAwal" type="date" class="form-control form-control-sm elevation-2"> </td>
                        <td> <input wire:model="tglAkhir" type="date" class="form-control form-control-sm elevation-2"> </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            @if ( $proyek && $proyek->count() > 0)
                            <thead class=" bg-gradient-info">
                                <tr>
                                    <th>Tgl.Mulai</th>
                                    <th>Tgl.Selesai</th>
                                    <th>Pemilik</th>
                                    <th>Nama Proyek</th>
                                    <th>Alamat</th>
                                    <th>Cetak</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $proyek as $p )
                                <tr class="text-center">
                                    <td>{{ date('d-M-Y',strtotime($p->tanggal_mulai)) }}</td>
                                    <td>{{ date('d-M-Y',strtotime($p->tanggal)) }}</td>
                                    <td class=" text-capitalize">{{ $p->client->nama }}</td>
                                    <td class=" text-capitalize">{{ $p->nama_proyek }}</td>
                                    <td class=" text-capitalize">{{ $p->alamat }}</td>
                                    <td><a target="_blank" href="cetakRiwayat/{{ $p->id }}" class="btn btn-warning btn-sm"> <i class="fas fa-print"></i>Cetak</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <div class="alert alert-default-info text-center"> Data Tidak Ditemukan</div>
                            @endif
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
