<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <h5>Laporan Anggaran</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <table class="table mb-3">
                    <tr>
                        <h5 class="text-center">Filter Tanggal</h5>
                    </tr>
                    <tr>
                        <th>Tgl.Awal</th>
                        <th>Tgl.Akhir</th>
                    </tr>
                    <tr>
                        <td> <input wire:model="tglAwal" type="date" class="form-control form-control-sm"> </td>
                        <td> <input wire:model="tglAkhir" type="date" class="form-control form-control-sm"> </td>
                    </tr>
                </table>
                {{-- <div class="mb-3">
                    <select wire:model="proyek" name="" id="" class="form-control">
                        <option selected> - pilih Proyek - </option>
                        @foreach ( $proyekid as $p )
                            <option value="{{ $p->id }}">{{ $p->nama_proyek }}</option>
                        @endforeach
                    </select>
                    <button wire:click="cari" class="btn btn-sm btn-success m-2"><i class="fas fa-search"></i></button>
                    @if ( $proyek && $proyek != '')
                    <a target="_blank" href="{{ route('cetak.anggaran',$proyek) }}" class="btn btn-warning"><i class="fas fa-print"></i></a>
                    @endif
                </div> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-navy card-outline">
                    <div class="card-body">
                        <table class="table table-bordered">
                            @if ( $rab && $rab->count() > 0)
                            <thead>
                                <tr class="text-center bg-gradient-info">
                                    <th>Tgl. Disetujui</th>
                                    <th>Kode</th>
                                    <th>Nama Proyek</th>
                                    <th>Pemilik</th>
                                    <th>Total</th>
                                    <th>Cetak</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $rab as $dr )
                                <tr class="text-center">
                                    <td>{{ date('d-M-Y',strtotime($dr->tanggal)) }}</td>
                                    <td class="text-bold">{{ $dr->kode_rab }}</td>
                                    <td>{{ $dr->proyekrab->nama_proyek }}</td>
                                    <td>{{ $dr->proyekrab->client->nama}}</td>
                                    <td>{{ 'Rp. '. number_format($dr->jumlah) }}</td>
                                    <td><a target="_blank" href="{{ route('cetak.anggaran',$dr->proyekrab->id) }}" class="btn btn-warning"><i class="fas fa-print"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <div class="alert alert-default-info text-center"> <h5>Data Belum Ada</h5></div>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
