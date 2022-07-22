<div>
    <div class="container p-2">
        <div class="row">
            <div class="col col-md-6">
                <p>
                    <button class="btn btn-primary btn-sm m-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Tambah
                    </button>
                </p>
                <div wire:ignore.self class="collapsing" id="collapseExample">
                    <div class="card card-body">
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
                                    <label for="jumlah" class="form-label">Jumlah Alat</label>
                                    <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                        is-invalid
                                    @enderror " name="jumlah" id="jumlah" placeholder="Jumlah Alat" required>
                                    @error('jumlah')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Penambah</label>
                                    <input wire:model="nama" type="text" class="form-control form-control-sm @error('nama')
                                        is-invalid
                                    @enderror " id="nama" placeholder="nama" required>
                                    @error('nama')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>


                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Di Tambah</label>
                                    <input wire:model="tanggal" type="date" class="form-control form-control-sm @error('tanggal')
                                        is-invalid
                                    @enderror " name="tanggal" id="tanggal" placeholder="tanggal Alat" required>
                                    @error('tanggal')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                        is-invalid
                                    @enderror " id="satuan" placeholder="satuan">
                                    @error('satuan')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div wire:click="tambah" class="mb-3 text-center">
                                    <button class="btn btn-outline-success mt-3">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue text-center">Data Alat Tidak Layak Pakai</div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 440px;">
                            <table class="table table-head-fixed text-nowrap table-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">jumlah</th>
                                        <th scope="col">satuan</th>
                                        <th scope="col">Nama Penambah</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $d )
                                    <tr>
                                        <td scope="col">{{ $d->deskripsi }}</td>
                                        <td scope="col">{{ $d->jumlah }}</td>
                                        <td scope="col">{{ $d->satuan }}</td>
                                        <td scope="col">{{ $d->nama }}</td>
                                        <td scope="col">{{ $d->tanggal }}</td>
                                        <th scope="row">
                                            <a onclick="return confirm('Data {{ $d->deskripsi }} Akan di Hapus') || event.stopImmediatePropagation()" wire:click="hapus({{ $d->id }})" class="btn btn-sm btn-outline-danger ">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a wire:click="edit({{ $d->id }})" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#editData">
                                                <i class="fas fa-edit" title="Edit"></i>
                                            </a>
                                            <a wire:click="dataMasuk({{ $d->id }})" class="btn btn-sm bg-success" data-toggle="modal" data-target="#tambahMasuk">
                                                <i class="fas fa-plus" title="Tambah Ke Data Masuk"></i>
                                            </a>
                                        </th>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-gradient-lightblue rounded-bottom"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-cyan text-center">Data Alat Sudah Diganti</div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 440px;">
                            <table class="table table-head-fixed text-nowrap table-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">jumlah</th>
                                        <th scope="col">satuan</th>
                                        <th scope="col">Nama Penambah</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $selesai as $d )
                                    <tr>
                                        <td scope="col" class=" text-uppercase ">{{ $d->deskripsi }}</td>
                                        <td scope="col">{{ $d->jumlah }}</td>
                                        <td scope="col">{{ $d->satuan }}</td>
                                        <td scope="col">{{ $d->nama }}</td>
                                        <td scope="col">{{ $d->tanggal }}</td>
                                        <th scope="row">
                                            <a onclick="return confirm('Data {{ $d->deskripsi }} Akan di Hapus') || event.stopImmediatePropagation()" wire:click="hapus({{ $d->id }})" class="btn btn-sm btn-outline-danger ">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </th>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-gradient-lightblue rounded-bottom"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                    @if (session()->has('ubah'))
                    <div class="alert alert-success">
                        {{ session('ubah') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
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
                                <label for="jumlah" class="form-label">Jumlah Alat</label>
                                <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                        is-invalid
                                    @enderror " name="jumlah" id="jumlah" placeholder="Jumlah Alat" required>
                                @error('jumlah')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Penambah</label>
                                <input wire:model="nama" type="text" class="form-control form-control-sm @error('nama')
                                        is-invalid
                                    @enderror " id="nama" placeholder="nama" required>
                                @error('nama')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>


                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Di Tambah</label>
                                <input wire:model="tanggal" type="date" class="form-control form-control-sm @error('tanggal')
                                        is-invalid
                                    @enderror " name="tanggal" id="tanggal" placeholder="tanggal Alat" required>
                                @error('tanggal')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                        is-invalid
                                    @enderror " id="satuan" placeholder="satuan">
                                @error('satuan')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="update" type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="tambahMasuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                    @if (session()->has('ubah'))
                    <div class="alert alert-success">
                        {{ session('ubah') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <div class="modal-body">
                    <div class="row">
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
                                @enderror " id="harga" placeholder="harga satuan" required>
                                @error('harga')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tempat" class="form-label">Tempat</label>
                                <input wire:model="tempat" type="text" class="form-control form-control-sm @error('tempat')
                                    is-invalid
                                @enderror " name="tempat" id="tempat" placeholder="Tempat Pembelian" required>
                                @error('tempat')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">

                                <select wire:model="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Pilih Kondisi Alat</option>
                                    <option value="baru">Baru</option>
                                    <option value="bekas">Bekas</option>
                                </select>

                            </div>


                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input wire:model="deskripsi" type="text" class="form-control form-control-sm @error('deskripsi')
                                        is-invalid
                                    @enderror " id="deskripsi" placeholder="Deskripsi" required disabled>
                                @error('deskripsi')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah Alat</label>
                                <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                        is-invalid
                                    @enderror " name="jumlah" id="jumlah" placeholder="Jumlah Alat" required>
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
                                    @enderror " id="satuan" placeholder="satuan" disabled>
                                @error('satuan')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                {{ $tharga }}
                                <label for="harga_total" class="form-label">Total Harga</label>
                                <input wire:model="tharga" type="number" class="form-control form-control-sm" id="harga_total" placeholder="" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="masuk" type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </div>
        </div>
    </div>
</div>
