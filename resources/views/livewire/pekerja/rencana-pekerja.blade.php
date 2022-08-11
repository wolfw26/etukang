<div>
    <div class="container">
        <div class="card card-default elevation-2">
            <div class="card-body">
                <div class="alert alert-default-primary text-center">
                    <h4>Rencana Kerja</h4>
                </div>
                <div class="card card-outline card-primary">
                    <div class="card-body">
                        @if ( $proyek && $proyek->rencanakerja->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Status</th>
                                    <th>Tgl. Selesai</th>
                                    <th>Status <br> Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $proyek->rencanakerja as $rk )
                                <tr>
                                    <td>{{ $rk->keterangan }}</td>
                                    <td>{{ date('d-M-Y',strtotime($rk->tanggal_mulai)) }}</td>
                                    <td>{{ date('d-M-Y',strtotime($rk->tanggal_selesai)) }}</td>
                                    <td>
                                        @if ( $rk->status == 'selesai')
                                            <div class="badge badge-success"> SELESAI </div>
                                        @else
                                            <div class="badge badge-secondary"> BELUM SELESAI</div>
                                        @endif</td>
                                    <td>{{ date('d-M-Y',strtotime($rk->tanggal)) }}</td>
                                    <td>
                                        @if ( $rk->status == 'selesai')
                                        <button wire:click="belum({{ $rk->id }})" class="btn btn-sm btn-outline-warning">Belum</button>
                                        @else
                                        <button wire:click="selesai({{ $rk->id }})" class="btn btn-sm btn-outline-success">Selesai</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-default-warning text-center"> <h3> Belum Ada Rencana </h3> </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
