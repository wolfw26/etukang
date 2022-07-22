<div>
    <div class="container-fluid p-2">
        <div class="row">
            <div class="col col-md-12">
                <p>
                    <button class="btn btn-primary btn-sm m-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Tambah
                    </button>
                </p>
                <div class="row">
                    @if (session()->has('tambah'))
                    <div class="alert alert-sm alert-success">
                        {{ session('tambah') }}
                        <button type="button" class="btn bg-success rounded-circle " data-dismiss="alert">x</button>
                    </div>
                    @endif
                    <div class="col-3">
                    </div>
                </div>
                <div wire:ignore.self class="collapsing" id="collapseExample">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input wire:model="deskripsi" type="text" class="form-control form-control-sm @error('deskripsi')
                                            is-invalid
                                        @enderror " id="deskripsi" placeholder="Deskripsi" required>
                                    @error('deskripsi')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tempat" class="form-label">Tempat Sewa</label>
                                    <input wire:model="tempat" type="text" class="form-control form-control-sm @error('sewa')
                                            is-invalid
                                        @enderror " name="tempat" id="tempat" placeholder="Tempat Sewa" required>
                                    @error('tempat')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                            is-invalid
                                        @enderror " id="jumlah" placeholder="jumlah">
                                    @error('jumlah')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                            is-invalid
                                        @enderror " id="satuan" placeholder="Satuan" required>
                                    @error('satuan')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div wire:click="tambahAlat" class="mb-3 text-center">
                                    <button class="btn btn-outline-success mt-3">Tambah</button>
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="kode" class="form-label">kode</label>
                                    <input wire:model="kode" type="text" class="form-control form-control-sm @error('kode')
                                            is-invalid
                                        @enderror " name="kode" id="kode" placeholder="Kode Alat" required>
                                    @error('kode')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    {{ $tanggal_masuk }}
                                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                    <input wire:model="tanggal_masuk" type="date" class="form-control form-control-sm" id="tanggal_masuk" placeholder="Tanggal Masuk">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">harga</label>
                                    <input wire:model="harga" type="number" class="form-control form-control-sm @error('harga')
                                            is-invalid
                                        @enderror " id="harga" placeholder="harga" required>
                                    @error('harga')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="harga_total" class="form-label">Total Harga</label>
                                    <input wire:model="tharga" type="number" class="form-control form-control-sm" id="harga_total" placeholder="" disabled readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <label for="harga_total" class="form-label">Kondisi Alat</label> <br>
                                    <select wire:model="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Pilih Kondisi Alat</option>
                                        <option value="baru">Baru</option>
                                        <option value="bekas">Bekas</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="fungsi" class="form-label">Fungsi dan Kegunaan Alat</label>
                                    <textarea wire:model="fungsi" class="form-control" placeholder="Fungsi Dan Kegunaan Alat" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="merk" class="form-label">Merk</label>
                                    <input wire:model="merk" type="text" class="form-control form-control-sm @error('merk')
                                            is-invalid
                                        @enderror " name="merk" id="merk" placeholder="merk Alat" required>
                                    @error('merk')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue text-center">
                        <div class="row p-0">
                            <div class="col-4 mr-5  text-left">
                                <div class="input-group ">
                                    <input wire:model="cari" type="text" class="form-control form-control-sm" placeholder="Cari Material" aria-label="Cari Material" name="cari">
                                </div>
                            </div>
                            <div class="col text-left ml-3">
                                <h3>Data Alat Masuk</h3>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 440px;">
                            @if ( $data && $data->count() > 0)
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Harga Alat</th>
                                        <th scope="col">Tempat Pembelian</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Jumlah Alat</th>
                                        <th scope="col">Satuan alat</th>
                                        <th scope="col">Jumlah Harga</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $d )
                                    <tr>
                                        <td scope="col"> <u> <i class="text-bold">{{ $d->kode }}</i></u> </td>
                                        <td scope="col">{{ $d->keterangan }}</td>
                                        <td scope="col">{{ $d->tanggal }}</td>
                                        <td scope="col">{{ 'Rp. ' .  number_format($d->harga,2) }}</td>
                                        <td scope="col">{{ $d->tempat }}</td>
                                        <td scope="col">{{ $d->status }}</td>
                                        <td scope="col" class="text-right text-bold">{{ $d->jumlah }}</td>
                                        <td scope="col">
                                            <div class="badge badge-success">{{ $d->satuan }}</div>
                                        </td>
                                        <td scope="col">{{ 'Rp. ' . number_format($d->total_harga,2) }}</td>
                                        <th scope="row">
                                            <a onclick="return confirm('Data {{ $d->keterangan }} Akan di Hapus') || event.stopImmediatePropagation()" wire:click="hapus({{ $d->id }})" class="btn btn-sm btn-outline-danger ">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a wire:click="edit({{ $d->id }})" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#editAlatin">
                                                <i class="fas fa-edit" title="Edit"></i>
                                            </a>
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            @else
                            <div class="container-fluid text-center m-5">
                                <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer bg-gradient-lightblue rounded-bottom"></div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editAlatin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    @if (session()->has('edit'))
                    <div class="alert alert-sm alert-success">
                        {{ session('edit') }}
                        <button type="button" class="btn bg-success rounded-circle " data-dismiss="alert">x</button>
                    </div>
                    @endif
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input wire:model="deskripsi" type="text" class="form-control form-control-sm @error('deskripsi')
                                    is-invalid
                                @enderror " id="deskripsi" placeholder="Deskripsi" required>
                                @error('deskripsi')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tempat" class="form-label">Tempat Sewa</label>
                                <input wire:model="tempat" type="text" class="form-control form-control-sm @error('sewa')
                                    is-invalid
                                @enderror " name="tempat" id="tempat" placeholder="Tempat Sewa" required>
                                @error('tempat')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                    is-invalid
                                @enderror " id="jumlah" placeholder="jumlah">
                                @error('jumlah')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                    is-invalid
                                @enderror " id="satuan" placeholder="Satuan" required>
                                @error('satuan')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="fungsi" class="form-label">Fungsi dan Kegunaan Alat</label>
                                <textarea wire:model="fungsi" class="form-control" placeholder="Fungsi Dan Kegunaan Alat" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>



                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="kode" class="form-label">kode</label>
                                <input wire:model="kode" type="text" class="form-control form-control-sm @error('kode')
                                    is-invalid
                                @enderror " name="kode" id="kode" placeholder="Kode Alat" required>
                                @error('kode')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                <input wire:model="tanggal_masuk" type="date" class="form-control form-control-sm" id="tanggal_masuk" placeholder="Tanggal Masuk">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">harga</label>
                                <input wire:model="harga" type="number" class="form-control form-control-sm @error('harga')
                                    is-invalid
                                @enderror " id="harga" placeholder="harga" required>
                                @error('harga')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                {{ $status }}
                                <label for="floatingSelect">Status Alat</label>
                                <select wire:model="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Pilih Kondisi Alat</option>
                                    <option value="baru">Baru</option>
                                    <option value="bekas">Bekas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input wire:model="merk" type="text" class="form-control form-control-sm @error('merk')
                                            is-invalid
                                        @enderror " name="merk" id="merk" placeholder="merk Alat" required>
                                @error('merk')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="harga_total" class="form-label">Total Harga</label>
                                <input wire:model="tharga" type="number" class="form-control form-control-sm" id="harga_total" placeholder="" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="update" type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
