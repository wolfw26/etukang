<div>
    <div class="container p-2 shadow-2xl shadow-sm shadow-inner">
        @if ($proyek && $proyek->count() > 0)
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-green">
                    <div class="card-body">
                        <table class="table table-borderless">
                            @foreach ( $proyek as $p )
                            <tr>
                                <th scope="col">Nama Proyek :</th>
                                <td scope="col"> {{ $p->nama_proyek }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Alamat :</th>
                                <td scope="col"> {{ $p->alamat }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Jenis :</th>
                                <td scope="col"> {{ $p->jenis_proyek }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Luas :</th>
                                <td scope="col"> {{ $p->luas_tanah }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Lebar Rumah :</th>
                                <td scope="col"> {{ $p->lebar_rumah }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Panjang Rumah :</th>
                                <td scope="col"> {{ $p->panjang_rumah }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Satuan ukuran :</th>
                                <td scope="col"> {{ $p->satuan }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Status Proyek :</th>
                                <td scope="col"> {{ $p->status}} </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-outline card-green">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Aksi</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Harga Satuan</th>
                                    <!-- <th scope="col">Stok Awal</th>
                                    <th scope="col">Masuk</th>
                                    <th scope="col">Keluar</th> -->
                                    <th scope="col">Stok</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($material as $d )
                                <tr>
                                    <th scope="row">
                                        <a href=" /adm/material/d/{{ $d->id }} " onclick="return confirm('Hapus Data   {{ $d->nama_material }} ');" class="btn btn-sm bg-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a wire:click="edit( {{ $d->id }})" data-toggle="modal" data-target="#tambahMaterial" class="btn btn-sm bg-teal">
                                            <i class="fas fa-edit" title="Edit"></i>
                                        </a>
                                    </th>
                                    <td class="text-bold"> <u> {{ $d->kode_material}}</u></td>
                                    <td> {{ $d->nama_material}}</td>
                                    <td>
                                        <div class="badge badge-pill badge-success">{{ $d->satuan}}</div>
                                    </td>
                                    <td> {{ 'Rp.'. number_format($d->harga_satuan,2)}}</td>
                                    <!-- <td> {{ $d->stok}}</td>
                                    <td> {{ $d->masuk}}</td>
                                    <td> {{ $d->keluar}}</td> -->
                                    <td>
                                        @if ( $d->stok_akhir < 1) <div class="badge badge-danger"> Stok Habis
                                    </div>
                                    @endif
                                    <div class="badge @if ( $d->stok_akhir > 10)
                                                            badge-success
                                                        @elseif( $d->stok_akhir > 5)
                                                            badge-warning

                                                        @endif ">{{ $d->stok_akhir}}
                                    </div>
                                    </td>
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
                                <label for="nama_proyek" class="form-label">Nama Proyek</label>
                                <input wire:model="nama_proyek" type="text" class="form-control form-control-sm @error('nama_proyek')
                                        is-invalid
                                    @enderror " id="nama_proyek" placeholder="nama_proyek" required>
                                @error('nama_proyek')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jenis Pekerjaan</label>
                                <select wire:model="jenis_proyek" name="" id="" class="form-control form-control-sm">
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
                                    @enderror " id="panjang_rumah" placeholder="panjang_rumah" required>
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
                                    @enderror " id="lebar_rumah" placeholder="lebar_rumah" required>
                                @error('lebar_rumah')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input wire:model="satuan" type="number" class="form-control form-control-sm @error('satuan')
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
