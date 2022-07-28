<div>
    <div class="container-fluid pr-md-3">
        <div class="row mt-3">
            <div class="col-12">
                <div class="alert alert-default-secondary text-center shadow-md shadow-inner mt-3">
                    <h3>LAPORAN ALAT @if ( $kategori != 0)
                        <div class="text-uppercase">{{ $kategori }}</div>
                        @endif
                    </h3>
                </div>
            </div>
        </div>
        <div class="row  p-2 rounded mb-3">
            <div class="col-4">
                <div class="mb-3 mt-2">
                    {{ $kategori }}
                    <select wire:model="kategori" name="" id="" class="form-control form-control-sm">
                        <option value="0" selected> -- Alat -- </option>
                        <option value="masuk">Alat Masuk</option>
                        <option value="rusak">Alat rusak</option>
                        <option value="sewa">Sewa Alat</option>
                    </select>
                </div>
            </div>
            <div class="col-4 border ">
                <div class="row ">
                    @if ( $kategori == 'masuk')
                    <table>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    <span><i>Tanggal Awal</i></span>
                                </td>
                                <td>
                                    <span><i>Tanggal Akhir</i></span>
                                </td>
                            </tr>
                            <tr class="text-center ">
                                <td>
                                    <input wire:model="awalMasuk" type="date" class="form-control form-control-sm m-1">
                                </td>
                                <td>
                                    <input wire:model="akhirMasuk" type="date" class="form-control form-control-sm m-1">
                                </td>
                                <td>
                                    <button wire:click="cariMasuk" class="btn btn-sm btn-success ml-2"> <i class="fas fa-plus"></i> Cari</button>
                                </td>
                                <td>
                                    <a href="cetakalat/masuk/tglawl/{{ $awalMasuk }}/tglakhr/{{ $akhirMasuk }}" target="_blank" class="btn btn-sm btn-outline-warning ml-2"> <i class="fas fa-print"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                    @if ( $kategori == 'rusak')
                    <table>
                        <tbody>
                            <a href="{{ route('laporanAlat') }}" target="" class="btn btn-sm btn-outline-warning m-3" onclick="return printArea('rusak');"> <i class="fas fa-print"></i></a>

                        </tbody>
                    </table>
                    @endif
                    @if ( $kategori == 'sewa')
                    <table>
                        <tbody>
                            <a href="{{ route('laporanAlat') }}" class="btn btn-sm btn-outline-warning m-3" onclick="return printArea('sewa');"> <i class="fas fa-print"></i></a>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
            <div class="col-4 border">
                @if ( $kategori == 'keluar')
                <table>
                    <tbody>
                        <tr>Cari Proyek</tr>
                        <tr>
                            <select wire:model="proyekid" name="" id="" class="form-control">
                                <option value="0" selected>-- Proyek --</option>
                                @foreach ( $proyek as $proyeks )
                                <option value="{{ $proyeks->id }}">{{ $proyeks->nama_proyek }}</option>
                                @endforeach
                            </select>
                        </tr>
                    </tbody>
                </table>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-navy mt-2">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div id="sewa">
                            <table class="table table-bordered table-hover">
                                @if ( $kategori == 'sewa')
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3>Data Sewa Alat</h3>
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Deskripsi</th>
                                        <th>Tempat Sewa</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                        <th>Merk</th>
                                        <th>Harga</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $sewa )
                                    <tr>
                                        <td>{{ $sewa->kode }}</td>
                                        <td>{{ $sewa->deskripsi }}</td>
                                        <td>{{ $sewa->tempat_sewa }}</td>
                                        <td>{{ $sewa->tanggal_mulai }}</td>
                                        <td>{{ $sewa->tanggal_selesai }}</td>
                                        <td>{{ $sewa->merk }}</td>
                                        <td>{{'Rp.'. number_format($sewa->harga) }}/{{ $sewa->satuan }}</td>
                                        <td>{{ $sewa->jumlah }}-{{ $sewa->satuan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @endif
                            </table>
                        </div>
                        @if ( $kategori == 'rusak')
                        <div id="rusak">
                            <table class="table table-bordered table-hover">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3>Data Alat</h3>
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                        <th>Penambah</th>
                                        <th>Status</th>
                                        <th>Tanggal Di tambah</th>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $rusak )
                                    <tr>
                                        <td>{{ $rusak->deskripsi }}</td>
                                        <td>{{ $rusak->jumlah }}</td>
                                        <td>{{ $rusak->satuan }}</td>
                                        <td>{{ $rusak->nama }}</td>
                                        <td>{{ $rusak->status }}</td>
                                        <td>{{ date('d-M-Y',strtotime($rusak->tanggal)) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                        @if ($kategori == 'masuk')
                        @if($data && $data->count() > 0)
                        <div id="masuk">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kode</th>
                                        <th>Keterangan</th>
                                        <th>Merk</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Tempat Beli</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $masuk )
                                    <tr>
                                        <td>{{ $masuk->tanggal }}</td>
                                        <td>{{ $masuk->kode }}</td>
                                        <td>{{ $masuk->keterangan }}</td>
                                        <td>{{ $masuk->merk }}</td>
                                        <td>{{ 'Rp.'. number_format($masuk->harga) }}</td>
                                        <td>{{ $masuk->jumlah }}/ {{ $masuk->satuan }}</td>
                                        <td>{{ 'Rp.'. number_format($masuk->total_harga) }}</td>
                                        <td>{{ $masuk->tempat }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <td class=" bg-gradient-success font-weight-bold">{{ 'Rp.'. number_format($data->sum('total_harga')) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-warning"> Cari Alat Masuk</div>
                        @endif
                        @endif
                    </div>
                    @if ($kategori == 0)
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class=" elevation-1 text-center">
                                <th>Kode</th>
                                <th>Deskripsi <br> Alat</th>
                                <th>Merk</th>
                                <th>Kepemilikan</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ( $data && $data->count() > 0)
                            @foreach ( $data as $alat )
                            <tr class="text-center">
                                <td>{{ $alat->kode }}</td>
                                <td>{{ $alat->nama }}</td>
                                <td>{{ $alat->Merk }}</td>
                                <td>{{ $alat->kepemilikan }}</td>
                                <td>{{ $alat->satuan }}</td>
                                <td>{{ 'Rp.'. number_format($alat->harga_satuan) }}</td>
                            </tr>
                            @endforeach
                            @else
                                <div class="alert alert-secondary text-center elevation-1"> Data Masih Belum Ditambah</div>
                            @endif

                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script language="javascript">
        function printArea(masuk) {
            var printPage = document.getElementById(masuk).innerHTML;
            var oriPage = document.body.innerHTML;
            document.body.innerHTML = printPage;
            window.print();
            document.body.innerHTML = oriPage;
        }

        function printArea(sewa) {
            var printPage = document.getElementById(sewa).innerHTML;
            var oriPage = document.body.innerHTML;
            document.body.innerHTML = printPage;
            window.print();
            document.body.innerHTML = oriPage;
        }

        function printArea(rusak) {
            var printPage = document.getElementById(rusak).innerHTML;
            var oriPage = document.body.innerHTML;
            document.body.innerHTML = printPage;
            window.print();
            document.body.innerHTML = oriPage;
        }
    </script>
</div>
