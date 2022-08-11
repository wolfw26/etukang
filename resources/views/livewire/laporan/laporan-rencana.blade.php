<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info text-center">
                    <h5>Laporan Rencana Proyek</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <table class="table">
                    <tr>
                        <th>Tgl. Awal</th>
                        <th>Tgl. Akhir</th>
                    </tr>
                    <tr>
                        <td> <input wire:model="tglAwal" type="date" class="form-control form-control-sm elevation-2"> </td>
                        <td> <input wire:model="tglAkhir" type="date" class="form-control form-control-sm elevation-2"> </td>
                    </tr>
                </table>
                    {{-- <select wire:model="data" name="" id="" class="form-control form-control-sm">
                        <option> - PiliH Proyek -</option>
                        @foreach ( $proyek as $d )
                        <option value="{{ $d->id }}">{{ $d->nama_proyek }}</option>
                        @endforeach
                    </select>

                    <button wire:click="cari" class="btn btn-success btn-sm"><i class="fas fa-search"></i></button>
                    @if ( $rencana && $rencana->count() > 0)
                    <a target="_blank" href="cetakRencanaProyek/{{ $id_proyek }}" class="btn btn-warning"> <i class="fas fa-print"></i>Cetak</a>
                    @endif --}}


            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-navy elevation-2">
                    <div class="card-body">
                        <table class="table table-bordered">
                            @if ($proyek && $proyek->count() > 0)
                            <thead>
                                <tr class="text-center">
                                    <th>Tgl. Mulai</th>
                                    <th>Tgl. Selesai</th>
                                    <th>Nama Proyek</th>
                                    <th>Alamat</th>
                                    <th>Pemilik</th>
                                    <th>Panjang bangunan</th>
                                    <th>Lebar bangunan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proyek as $dr )
                                <tr class="text-center">
                                    <td>{{ date('d-M-Y',strtotime($dr->tanggal_mulai)) }}</td>
                                    <td>{{ date('d-M-Y',strtotime($dr->tanggal_selesai)) }}</td>
                                    <td class="text-bold">{{ $dr->nama_proyek }}</td>
                                    <td>{{ $dr->alamat }}</td>
                                    <td>{{ $dr->client->nama }}</td>
                                    <td>{{ $dr->panjang_rumah }} - {{ $dr->satuan }}</td>
                                    <td>{{ $dr->lebar_rumah }} - {{ $dr->satuan }}</td>
                                    <td><a target="_blank" href="cetakRencanaProyek/{{ $dr->id }}" class="btn btn-warning btn-sm"> <i class="fas fa-print"></i>Cetak</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <div class="alert alert-default-info text-center"> <h4>Data Tidak Ada</h4></div>
                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
