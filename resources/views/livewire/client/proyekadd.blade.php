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
                            @endforeach

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
                                <input wire:model="luas_tanah" type="text" class="form-control form-control-sm @error('luas_tanah')
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
                                <input wire:model="panjang_rumah" type="text" class="form-control form-control-sm @error('panjang_rumah')
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
                                <input wire:model="lebar_rumah" type="text" class="form-control form-control-sm @error('lebar_rumah')
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
