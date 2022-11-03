<div>

    <div class="container p-2 shadow-2xl shadow-sm shadow-inner">
        @if ($proyek && $proyek->count() > 0)

        @if ( $proyek->status == 'PERENCANAAN')
        <div class="alert alert-default-primary text-center"> DALAM PERENCANAAN </div>
        @elseif ( $proyek->status == 'DIKERJAKAN')
        <div class="alert alert-default-success text-center"> DALAM PENGERJAAN </div>
        @elseif ( $proyek->status == 'SELESAI')
        <div class="alert alert-success text-center"> SELESAI </div>
        @else
        <div class="alert alert-default-info text-center"> MENUNGGU PERSETUJUAN ADMIN </div>
        @endif

        <div class="row">
            <div class="col-6">
                <div class="card card-outline card-green">
                    <div class="card-body">
                        <h2>Proyek</h2>
                        <table class="table table-border">

                            <tr>
                                <th style=" width : 12rem;">Nama Proyek</th>
                                <td>: {{ $proyek->nama_proyek }} </td>
                            </tr>
                            <tr>
                                <th style=" width : 12rem;">Alamat</th>
                                <td>: {{ $proyek->alamat }} </td>
                            </tr>
                            <tr>
                                <th style=" width : 12rem;">Jenis</th>
                                <td>: {{ $proyek->jenis_proyek }} </td>
                            </tr>
                            <tr>
                                <th style=" width : 12rem;">Luas</th>
                                <td>: {{ $proyek->luas_tanah }} </td>
                            </tr>
                            <tr>
                                <th style=" width : 12rem;">Lebar Rumah</th>
                                <td>: {{ $proyek->lebar_rumah }} </td>
                            </tr>
                            <tr>
                                <th style=" width : 12rem;">Panjang Rumah</th>
                                <td>: {{ $proyek->panjang_rumah }} </td>
                            </tr>
                            <tr>
                                <th style=" width : 12rem;">Satuan ukuran</th>
                                <td>: {{ $proyek->satuan }} </td>
                            </tr>
                            <tr>
                                <th style=" width : 12rem;">Nama Tukang</th>
                                @if ( $proyek->pekerja_id != null )
                                <td>: {{ $proyek->pekerja->nama}} </td>
                                @endif
                            </tr>
                            {{-- @if ( $proyek->status == 'SELESAI')
                            @foreach ( $proyek->rab as $rabs )
                                <tr>
                                    <th style=" width : 12rem;">BIAYA :</th>
                                    <td>: {{ 'Rp. '. number_format($rabs->jumlah)}} </td>
                                </tr>
                                @endforeach
                            @endif --}}



                        </table>
                        @if ( $proyek->status == 'PERENCANAAN')
                        <div class="alert alert-default-secondary text-center">{{ $proyek->status }}</div>
                        @elseif ( $proyek->status == 'DIKERJAKAN')
                        <div class="alert alert-default-success text-center">{{ $proyek->status }}</div>
                        @elseif ( $proyek->status == 'SELESAI')
                        <div class="alert alert-default-info text-center">{{ $proyek->status }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-outline card-navy">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="mb-3">
                                <label for="">Keterangan Pekerjaan</label>
                                <input wire:model="keteranganData" type="text" placeholder="Detail Permintaan Untuk Proyek Yang akan Dibuat" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label for="">Deskripsi</label>
                                <div class="form-floating">
                                    <textarea type="text" wire:model="deskripsiData" class="form-control" placeholder="Jelaskan Rincian " id="floatingTextarea"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <a class="btn btn-sm btn-success" wire:click="tambahData({{ $proyek->id }})"><i class="fas fa-plus"></i>Tambahkan</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-secondary m-1 p-0 table-responsive" style="height: 30vh;">
                                <table class="table table-bordered table-head-fixed p-0 m-0">
                                    <thead>
                                        <tr>
                                            <th>Keterangan</th>
                                            <th>Rincian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $proyek->dataproyek as $dataProyek )

                                        <tr>
                                            <td>{{ $dataProyek->keterangan }}</td>
                                            <td>{{ $dataProyek->deskripsi }}</td>
                                            <td>
                                                <a wire:click="HapusData({{ $dataProyek->id }})" class="btn text-danger" title="Hapus"> <i class="fas fa-trash"></i></a>
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
            @if ( $proyek && $proyek->materialTerpakai->count() > 0)
            <div class="col-6">
                <div class="card card-outline card-green">
                    <div class="card-body">
                        <h2>Daftar Material Proyek </h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Material</th>
                                    <th scope="col">Jumlah</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($proyek->materialTerpakai as $d )
                                <tr>
                                    <td> <u> {{ date('d-M-Y',strtotime($d->tanggal))}}</u></td>
                                    <td class="text-bold"> <u> {{ $d->kode_material}}</u></td>
                                    <td> {{ $d->nama_material}}</td>
                                    <td> {{ $d->jumlah}} - {{ $d->satuan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-6">
                <div class="card card-outline card-green">
                    <div class="card-body">
                        <h2>Daftar Absensi Pekerja </h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal Absen</th>
                                    <th scope="col">Jumlah Pekerja</th>
                                    <th scope="col">Deskripsi</th>

                                    <!-- <th scope="col">Stok Awal</th>
                                    <th scope="col">Masuk</th>
                                    <th scope="col">Keluar</th> -->
                                    {{-- <th scope="col">Stok</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($absen as $d )
                                <tr>

                                    <td class="text-bold"> <u> {{ $d->tanggal}}</u></td>
                                    <td> {{ $d->datanama->count() }} </td>
                                    <td> {{ $d->deskripsi}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-8">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="alert  alert-info shadow-md">
                                <h3>Tambah Proyek</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nama_proyek" class="form-label">Deskripsi Pekerjaan</label>
                                <input wire:model="nama_proyek" type="text" class="form-control form-control-sm @error('nama_proyek')
                                        is-invalid
                                    @enderror " id="nama_proyek" placeholder="Deskripsi Pekerjaan Yang ingin di buat" required>
                                @error('nama_proyek')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jenis Pekerjaan</label>
                                <select wire:model="jenis_proyek" name="" id="" class="form-control form-control-sm">
                                    <option selected>- Jenis Proyek -</option>
                                    <option value="pembangunan">Pembangunan</option>
                                    <option value="renovasi">Renovasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Proyek</label>
                                <input wire:model="alamat" type="text" class="form-control form-control-sm @error('alamat')
                                        is-invalid
                                    @enderror " id="alamat" placeholder="alamat" required>
                                @error('alamat')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="luas_tanah" class="form-label">Luas Tanah</label>
                                <input wire:model="luas_tanah" type="number" class="form-control form-control-sm @error('luas_tanah')
                                        is-invalid
                                    @enderror " id="luas_tanah" placeholder="luas_tanah" required>
                                @error('luas_tanah')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="panjang_rumah" class="form-label">Panjang Rumah</label>
                                <input wire:model="panjang_rumah" type="number" class="form-control form-control-sm @error('panjang_rumah')
                                        is-invalid
                                    @enderror " id="panjang_rumah" placeholder="panjang bangunan" required>
                                @error('panjang_rumah')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="lebar_rumah" class="form-label">Lebar Rumah</label>
                                <input wire:model="lebar_rumah" type="number" class="form-control form-control-sm @error('lebar_rumah')
                                        is-invalid
                                    @enderror " id="lebar_rumah" placeholder="lebar bangunan" required>
                                @error('lebar_rumah')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                        is-invalid
                                    @enderror " id="satuan" placeholder="satuan" required>
                                @error('satuan')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="m-4">
                                <button wire:click="tambah" class="btn btn-outline-success">Tambahkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

</div>
