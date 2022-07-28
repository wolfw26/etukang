<div>
    <div class="container-fluid p-2">
        <div class="row mb-3">
            <div class="col-4">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <p>Pilih Cetak Berdasarkan</p>
                            <select wire:model="modecetak" name="" id="" class="form-control form-control-sm">
                                <option selected>-- Pilih Cetak --</option>
                                <option value="all">Semua </option>
                                <option value="peritem">Per-item </option>
                                <option value="masuk">Data Masuk </option>
                                <option value="keluar">Data Keluar </option>
                            </select>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                @if ($modecetak == 'all')
                <div class="container-fluid m-3">
                    <div class="row">
                        <div class="col-4 p-3 m-0">
                            <a href="{{ route('cetakmaterial.all') }}" target="_blank" class="btn btn-sm btn-outline-warning"> <i class="fas fa-print"></i> Cetak</a>
                            {{-- <input type="button" value="Print" onclick="printPage();"> </input> --}}
                        </div>
                    </div>
                </div>
                @elseif ($modecetak == 'peritem')
                <div class="row mt-5">
                    <div class="col-12">
                        <select wire:model="pilihan" name="" id="" class="form-control shadow-md">
                            @foreach ( $materials as $d )
                            <option value="{{$d->id}}">{{$d->nama_material}}</option>
                            @endforeach
                        </select>
                        <a href="#" target="_blank" onclick="return printArea('area2');" class="btn btn-sm btn-outline-secondary mt-2"> <i class="fas fa-print"></i> Cetak</a>
                    </div>
                </div>
                @elseif ($modecetak == 'masuk')
                <div class="row m-2">
                    <div class="col-6 ">
                        <p>Tanggal Awal</p>
                        <input wire:model="tglawl" type="date" class="form-control">
                    </div>
                    <div class="col-6">
                        <p>tanggal akhir</p>
                        <input wire:model="tglakhr" type="date" class="form-control">
                    </div>
                    <button wire:click="kosong" class="btn btn-sm text-danger ">Reset</button>

                    <a href="cetakmaterial/masuk/tglawl/{{ $tglawl }}/tglakhr/{{ $tglakhr }}" target="_blank" class="btn btn-sm btn-outline-secondary mt-2"> <i class="fas fa-print"></i> Cetak</a>
                </div>
                @elseif ($modecetak == 'keluar')
                <div class="row m-2">
                    <div class="col-6 ">
                        <p>Tanggal Awal</p>
                        <input wire:model="tglawl" type="date" class="form-control">
                    </div>
                    <div class="col-6">
                        <p>tanggal akhir</p>
                        <input wire:model="tglakhr" type="date" class="form-control">
                    </div>
                    <button wire:click="kosong" class="btn btn-sm text-danger ">Reset</button>

                    <a href="cetakmaterial/keluar/tglawl/{{ $tglawl }}/tglakhr/{{ $tglakhr }}" target="_blank" class="btn btn-sm btn-outline-warning" > <i class="fas fa-print"></i> Cetak</a>
                </div>
                @else
                <div class="alert alert-secondary">Pilih Kategori Cetak</div>
                @endif
                {{-- <div class="card p-2">
                    <div class="card-header ">
                                <h5>Cetak Per-Tanggal</h5>
                    </div>
                    <table >
                        <tbody>
                            <tr >
                                <th>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Tanggal Awal</p>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <p>Tanggal Akhir</p>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                <th>
                                <th >
                                    <a target="_blank" href="material/" class="btn btn-md btn-outline-warning mt-5"> <i class="fas fa-print"></i> </a> </th>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}

            </div>
            <div class="col-6">

            </div>
        </div>
        @if ($modecetak == 'all')
        <div id="area">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-default-secondary">
                        <h4> Data Material</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-secondary">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>Kode</th>
                                        <th>Nama <br> Material</th>
                                        <th>Harga <br> Satuan</th>
                                        <th>Material <br> Masuk</th>
                                        <th>Material <br> Keluar</th>
                                        <th>Stok</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $materials )
                                    <tr>
                                        <td> {{ $materials->kode_material }} </td>
                                        <td>{{ $materials->nama_material }}</td>
                                        <td class="text-center">{{ 'Rp. '. $materials->harga_satuan }}</td>
                                        <td class="text-center">{{ $materials->materialin->sum('jumlah') }}</td>
                                        <td class="text-center">{{ $materials->materialout->sum('jumlah') }}</td>
                                        <td>{{ $materials->stok_akhir }}</td>
                                        <td>
                                            <div class="badge badge-secondary">{{ $materials->satuan }}</div>
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
        @elseif ( $modecetak == 'peritem')
        <div id="area2">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-secondary">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama Material</th>
                                        <th>Stok Awal</th>
                                        <th>Material Masuk</th>
                                        <th>Material Keluar</th>
                                        <th>Stok Akhir</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $materials )
                                    <tr class="text-center">
                                        <td>{{ $materials->tanggal }} </td>
                                        <td>{{ $materials->material }}</td>
                                        <td>{{ $materials->stok }}</td>
                                        <td>{{ $materials->masuk }}</td>
                                        <td>{{ $materials->keluar }}</td>
                                        <td>{{ $materials->stok_akhir }}</td>
                                        <td>
                                            <div class="badge badge-secondary">{{ $materials->datamaterial->satuan }}</div>
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
        @elseif ($modecetak == 'masuk')
        <div id="area3">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-secondary">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>Tanggal</th>
                                        <th>Kode Material</th>
                                        <th>Nama Material</th>
                                        <th>Jumlah <br> Awal</th>
                                        <th>Jumlah <br> Masuk</th>
                                        <th>Satuan</th>
                                        <th>Harga Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ( $data && $data->count() > 0 )
                                    @foreach ( $data as $materials )
                                    <tr>
                                        <td>{{ date('d-M-Y',strtotime($materials->tanggal)) }} </td>
                                        <td>{{ $materials->kode_material }}</td>
                                        <td>{{ $materials->nama_material }}</td>
                                        <td>{{ $materials->stok_awal }}</td>
                                        <td class="text-center">{{ $materials->jumlah }}</td>
                                        <td>
                                            <div class="badge badge-success">{{ $materials->satuan }}</div>
                                        </td>
                                        <td>{{ 'Rp. '. number_format($materials->harga_satuan) }}</td>
                                    </tr>

                                    @endforeach
                                    <tr>
                                        <th colspan="">Total</th>
                                    </tr>
                                    @else
                                    <div class="alert alert-info">Data <span class=" text-maroon">Kosong</span></div>

                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif ($modecetak == 'keluar')
        <div id="area4">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-secondary">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kode Material</th>
                                        <th>Nama Material</th>
                                        <th>Jumlah Awal</th>
                                        <th>Jumlah Keluar</th>
                                        <th>Satuan</th>
                                        <th>Harga Satuan</th>
                                        <th>Proyek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $materials )
                                    <tr>
                                        <td>{{ $materials->tanggal }} </td>
                                        <td>{{ $materials->kode_material }}</td>
                                        <td>{{ $materials->nama_material }}</td>
                                        <td>{{ $materials->stok_awal }}</td>
                                        <td>{{ $materials->jumlah }}</td>
                                        <td>
                                            <div class="badge badge-warning">{{ $materials->satuan }}</div>
                                        </td>
                                        <td>{{ $materials->harga_satuan }}</td>
                                        <td>{{ $materials->proyek->nama_proyek }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-default-light shadow-2xl"> Pilih Data Material</div>
        {{-- <div class="row">
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
                                @foreach ( $data as $materials )
                                <tr>
                                    <td> {{ $materials->datamaterial->kode_material }} </td>
        <td>{{ $materials->datamaterial->nama_material }}</td>
        <td>{{ 'Rp. '. $materials->datamaterial->harga_satuan }}</td>
        <td>{{ $materials->stok_akhir }}</td>
        <td>
            <div class="badge badge-secondary">{{ $materials->datamaterial->satuan }}</div>
        </td>
        </tr>
        @endforeach

        </tbody>
        </table>
    </div>
</div>
</div>
</div> --}}
@endif

</div>

<script language="javascript">
    function printArea(area) {
        var printPage = document.getElementById(area).innerHTML;
        var oriPage = document.body.innerHTML;
        document.body.innerHTML = printPage;
        window.print();
        document.body.innerHTML = oriPage;
    }

    function printArea(area2) {
        var printPage = document.getElementById(area2).innerHTML;
        var oriPage = document.body.innerHTML;
        document.body.innerHTML = printPage;
        window.print();
        document.body.innerHTML = oriPage;
    }

    function printArea(area4) {
        var printPage = document.getElementById(area4).innerHTML;
        var oriPage = document.body.innerHTML;
        document.body.innerHTML = printPage;
        window.print();
        document.body.innerHTML = oriPage;
    }

    function printArea(area3) {
        var printPage = document.getElementById(area3).innerHTML;
        var oriPage = document.body.innerHTML;
        document.body.innerHTML = printPage;
        window.print();
        document.body.innerHTML = oriPage;
    }
</script>
</div>
