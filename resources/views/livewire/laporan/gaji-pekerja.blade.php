<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <table class="table table-bordered">
                    <tbody>
                        <div class="row">
                            <div class="col-12">
                                <tr>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                    @if ( $gaji && $gaji->count() > 0)
                                    <th> <a target="_blank" href="cetakgaji/{{ $tglawal }}/{{ $tglakhir }}" class="btn btn-sm btn-outline-warning"> <i class="fas fa-print"></i> </a> </th>
                                    @else
                                    @endif
                                </tr>
                                <tr>
                                    <td>
                                        <input wire:model="tglawal" type="date" class="form-control">
                                    </td>
                                    <td>
                                        <input wire:model="tglakhir" type="date" class="form-control">
                                    </td>
                                    <td>
                                        @if ( $tglawal != null && $tglakhir != null)
                                        <button wire:click="cari" class="btn btn-sm btn-outline-success"><i class="fas fa-search"></i></button>
                                        @endif
                                    </td>
                                </tr>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    @if ( $gaji && $gaji->count() > 0)
                    <thead>
                        <tr>
                            <th>Nama <br> Pekerja</th>
                            <th>Gaji <br> Pokok</th>
                            <th>Uang <br> Makan</th>
                            <th>Upah <br> Transport</th>
                            <th>Total <br> Hari</th>
                            <th>Total <br> Lembur</th>
                            <th>Upah <br> Lembur</th>
                            <th> Potongan <br> Bonus</th>
                            <th>Total <br> Upah</th>
                            <th>Dibayar</th>
                            <th>Sisa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $gaji as $gajis )
                        <tr>
                            <td>{{ $gajis->nama_pekerja}}</td>
                            <td>{{ 'Rp.'. number_format($gajis->gapok)}}</td>
                            <td>{{ 'Rp.'. number_format($gajis->makan)}}</td>
                            <td>{{ 'Rp.'. number_format($gajis->transport)}}</td>
                            <td>{{ $gajis->hari}}</td>
                            <td>{{ $gajis->lembur}}</td>
                            <td>{{ 'Rp.'. number_format($gajis->upah_lembur)}}</td>
                            <td>{{ 'Rp.'. number_format($gajis->potongan)}} <br> {{'Rp.'. number_format($gajis->bonus) }} </td>
                            <td>{{ 'Rp.'. number_format($gajis->total) }}</td>
                            <td>{{ 'Rp.'. number_format($gajis->dibayar) }}</td>
                            <td>{{ 'Rp.'. number_format($gajis->sisa) }}</td>
                        </tr>
                        @endforeach
                        <tr class=" bg-gradient-cyan" >
                            <th colspan="8">Total Gaji</th>
                            <td class=" bg-cyan text-bold">{{ 'Rp.' . number_format($gaji->sum('total')) }}</td>
                        </tr>
                        <tr class=" bg-gradient-success">
                            <th colspan="9">Total Sudah Dibayar</th>
                            <td class=" bg-success text-bold font-weight-bolder">{{ 'Rp.'. number_format($gaji->sum('dibayar')) }}</td>
                        </tr>
                        <tr class=" bg-gradient-warning">
                            <th colspan="10">Total Sisa Pembayaran</th>
                            <td class=" bg-warning font-weight-bold">{{ 'Rp.' .  number_format($gaji->sum('sisa')) }}</td>
                        </tr>
                    </tbody>
                    @else
                    <div class="alert alert-default-primary text-center"> DATA TIDAK DITEMUKAN</div>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
