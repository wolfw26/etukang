<div>
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <p class="mt-3">
                    <button class="btn btn-primary btn-sm m-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Tambah
                    </button>
                </p>
                <div wire:ignore.self class="collapsing" id="collapseExample">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="kode" class="form-label">Kode</label>
                                    <input wire:model="kode" type="text" class="form-control form-control-sm @error('kode')
                                        is-invalid
                                    @enderror " id="kode" placeholder="kode" required>
                                    @error('kode')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Alat</label>
                                    <input wire:model="nama" type="text" class="form-control form-control-sm @error('nama')
                                        is-invalid
                                    @enderror " id="nama" placeholder="Nama Alat" required>
                                    @error('nama')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="fungsi" class="form-label">fungsi</label>
                                    <input wire:model="fungsi" type="text" class="form-control form-control-sm @error('fungsi')
                                        is-invalid
                                    @enderror " id="fungsi" placeholder="fungsi Alat" required>
                                    @error('fungsi')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Merk" class="form-label">Merk</label>
                                    <input wire:model="Merk" type="text" class="form-control form-control-sm @error('Merk')
                                        is-invalid
                                    @enderror " id="Merk" placeholder="Merk Alat" required>
                                    @error('Merk')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div wire:click="tambah" class="mb-3 text-center">
                                    <button class="btn btn-outline-success mt-3">Tambah</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <select wire:model="ceksewa" name="" id="" class="form-control">
                                        <option selected>Kategori</option>
                                        <option value="sewa">SEWA</option>
                                        <option value="dimiliki">BELI</option>
                                    </select>
                                    {{-- <input wire:model="ceksewa" type="checkbox" name="sewa" id="sewa" class="form-control-sm m-1"> --}}
                                    <!-- <i class="text-bold mt-2">Sewa</i> -->
                                </div>
                                <div class="mb-3">
                                    <label for="">SATUAN</label> <br>
                                    @if ( $ceksewa == 'sewa')
                                    <select wire:model="satuan" name="" id="" class="form-control form-control-sm">
                                        <option value="jam">JAM</option>
                                        <option value="hari">HARI</option>
                                    </select>
                                    @else
                                    <input wire:model="satuan" type="text" class="form-control form-control-sm">
                                    @endif
                                    {{-- <label for="satuan" class="form-label">Satuan</label>
                                    @if ( $ceksewa == 'beli')
                                    <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                        is-invalid
                                        @enderror " id="satuan" placeholder="satuan Alat" required>
                                    @elseif ( $ceksewa == "sewa")
                                    <select wire:model="satuan" name="satuan" id="satuan" class="form-control">
                                        <option value="hari">HARI</option>
                                        <option value="jam">JAM</option>
                                    </select>
                                    @endif --}}
                                    @error('satuan')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                    <input wire:model="harga_satuan" type="number" class="form-control form-control-sm @error('harga_satuan')
                                        is-invalid
                                    @enderror " id="harga_satuan" placeholder="harga satuan Alat" required>
                                    @error('harga_satuan')
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
            {{-- @if ( $ceksewa == 1)
            <div class="col-6">
                <div class="callout callout-info mt-5">
                    <h4>Jika Alat Menyewa</h4>
                    <p>Gunakan satuan dan Harga Satuan dari sewa</p>
                    <p>(Jam / Hari / Bulan)</p>
                </div>
            </div>
            @endif --}}
            @if (session()->has('update'))
            <div class="col-3 p-2">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Update</h5>
                    {{ session('update') }}
                </div>
            </div>
            @endif
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue text-center">
                        <div class="row">
                            <div class="col-4">
                                Data Alat
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4">
                                <input wire:model="cari" placeholder="Cari ..." type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    @if ( $data && $data->count() > 0 )
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 70vh;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Nama <br> Alat</th>
                                        <th scope="col">Fungsi</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">satuan</th>
                                        <th scope="col">harga <br> satuan</th>
                                        <th scope="col">Jumlah alat <br> Saat ini</th>
                                        <th scope="col"> Alat <br> Rusak</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $alat )
                                    <tr>
                                        <td scope="col"> <u class="text-bold"> {{ $alat->kode }}</u> </td>
                                        <td scope="col" class=" text-capitalize "> {{ $alat->nama }} </td>
                                        <td scope="col"> {{ $alat->fungsi }} </td>
                                        <td scope="col"> {{ $alat->Merk }} </td>
                                        <td scope="col"> {{ $alat->satuan }} </td>
                                        <td scope="col">Rp. {{ number_format($alat->harga_satuan,2) }} </td>
                                        <td scope="col" class="text-center"> {{ $alat->stok }}</td>
                                        <td scope="col" class="text-center">
                                            @if ( $alat->rusak && $alat->rusak->count() > 0)
                                            <div class="badge badge-danger"> <i class="fas fa-minus"></i> {{ $alat->rusak->count() }}</div>
                                        </td>
                                        @endif
                                        <td>
                                            <a wire:click="hapus({{ $alat->id }})" class="btn "><i class="fas fa-trash text-danger"></i></a>
                                            <button wire:click="edit({{ $alat->id }})" data-toggle="modal" data-target="#edit{{ $alat->id }}" class="btn "><i class="fas fa-edit text-cyan"></i></button>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div wire:ignore.self class="modal fade" id="edit{{$alat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Alat</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="kode" class="form-label">Kode</label>
                                                                <input wire:model="kode" type="text" class="form-control form-control-sm @error('kode')
                                        is-invalid
                                    @enderror " id="kode" placeholder="kode" required>
                                                                @error('kode')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama Alat</label>
                                                                <input wire:model="nama" type="text" class="form-control form-control-sm @error('nama')
                                        is-invalid
                                    @enderror " id="nama" placeholder="Nama Alat" required>
                                                                @error('nama')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="fungsi" class="form-label">fungsi</label>
                                                                <input wire:model="fungsi" type="text" class="form-control form-control-sm @error('fungsi')
                                        is-invalid
                                    @enderror " id="fungsi" placeholder="fungsi Alat" required>
                                                                @error('fungsi')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="Merk" class="form-label">Merk</label>
                                                                <input wire:model="Merk" type="text" class="form-control form-control-sm @error('Merk')
                                        is-invalid
                                    @enderror " id="Merk" placeholder="Merk Alat" required>
                                                                @error('Merk')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            {{-- <div class="mb-3">
                                                                <label for="status" class="form-label">Status</label>
                                                                <select wire:model="status" name="status" id="status" class="form-control form-control-sm">
                                                                    <option selected>-- Status --</option>
                                                                    <option value="baru">BARU</option>
                                                                    <option value="bekas">BEKAS</option>
                                                                </select>
                                                            </div> --}}
                                                            <div class="mb-3 d-flex justify-content-left">
                                                                <input wire:model="ceksewa" type="checkbox" name="sewa" id="sewa" class="form-control-sm m-1">
                                                                <i class="text-bold mt-2">Sewa</i>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="satuan" class="form-label">Satuan</label>
                                                                <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                        is-invalid
                                    @enderror " id="satuan" placeholder="satuan Alat" required>
                                                                @error('satuan')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                                                <input wire:model="harga_satuan" type="number" class="form-control form-control-sm @error('harga_satuan')
                                        is-invalid
                                    @enderror " id="harga_satuan" placeholder="harga satuan Alat" required>
                                                                @error('harga_satuan')
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
                                                    <div wire:click="update({{ $alat->id }})" class="mb-3 text-center">
                                                        <button class="btn btn-outline-success mt-3">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                    <div class="container-fluid text-center m-5">
                        <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                    </div>
                    @endif
                    <div class="card-footer bg-gradient-lightblue rounded-bottom"></div>
                </div>
            </div>
        </div>

        <!-- ALAT SEWA -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue text-center">
                        <div class="row">
                            <div class="col-4">
                                Data SEWA ALAT
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4">
                                <input wire:model="carisewa" placeholder="Cari ..." type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    @if ( $sewa && $sewa->count() > 0 )
                    <div class="card-body">
                        <div class="table-responsive table-responsive-sm">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Nama <br> Alat</th>
                                        <th class="w-25">Fungsi</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Kepemilikan</th>
                                        <th scope="col">satuan</th>
                                        <th scope="col">harga <br> satuan</th>
                                        <th scope="col">Jumlah alat <br> Saat ini</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $sewa as $sewas )
                                    <tr>
                                        <td> <u class="text-bold"> {{ $sewas->kode }}</u> </td>
                                        <td class="text-capitalize "> {{ $sewas->nama }} </td>
                                        <td> {{ $sewas->fungsi }} </td>
                                        <td> {{ $sewas->Merk }} </td>
                                        <td> {{ $sewas->kepemilikan }} </td>
                                        <td> {{ $sewas->satuan }} </td>
                                        <td>Rp. {{ number_format($sewas->harga_satuan,2) }} </td>
                                        <td class="text-center"> {{ $sewas->stok }}</td>
                                        <td>
                                            <a wire:click="hapus({{ $sewas->id }})" class="btn "><i class="fas fa-trash text-danger"></i></a>
                                            <button wire:click="edit({{ $sewas->id }})" data-toggle="modal" data-target="#edit{{ $sewas->id }}" class="btn "><i class="fas fa-edit text-cyan"></i></button>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div wire:ignore.self class="modal fade" id="edit{{$sewas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Alat</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="kode" class="form-label">Kode</label>
                                                                <input wire:model="kode" type="text" class="form-control form-control-sm @error('kode')
                                        is-invalid
                                    @enderror " id="kode" placeholder="kode" required>
                                                                @error('kode')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama Alat</label>
                                                                <input wire:model="nama" type="text" class="form-control form-control-sm @error('nama')
                                        is-invalid
                                    @enderror " id="nama" placeholder="Nama Alat" required>
                                                                @error('nama')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="fungsi" class="form-label">fungsi</label>
                                                                <input wire:model="fungsi" type="text" class="form-control form-control-sm @error('fungsi')
                                        is-invalid
                                    @enderror " id="fungsi" placeholder="fungsi Alat" required>
                                                                @error('fungsi')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="Merk" class="form-label">Merk</label>
                                                                <input wire:model="Merk" type="text" class="form-control form-control-sm @error('Merk')
                                        is-invalid
                                    @enderror " id="Merk" placeholder="Merk Alat" required>
                                                                @error('Merk')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            {{-- <div class="mb-3">
                                                                <label for="status" class="form-label">Status</label>
                                                                <select wire:model="status" name="status" id="status" class="form-control form-control-sm">
                                                                    <option selected>-- Status --</option>
                                                                    <option value="baru">BARU</option>
                                                                    <option value="bekas">BEKAS</option>
                                                                </select>
                                                            </div> --}}
                                                            <div class="mb-3 d-flex justify-content-left">
                                                                <input wire:model="ceksewa" type="checkbox" name="sewa" id="sewa" class="form-control-sm m-1">
                                                                <i class="text-bold mt-2">Sewa</i>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="satuan" class="form-label">Satuan</label>
                                                                <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                        is-invalid
                                    @enderror " id="satuan" placeholder="satuan Alat" required>
                                                                @error('satuan')
                                                                <p class="text-danger">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                                                <input wire:model="harga_satuan" type="number" class="form-control form-control-sm @error('harga_satuan')
                                        is-invalid
                                    @enderror " id="harga_satuan" placeholder="harga satuan Alat" required>
                                                                @error('harga_satuan')
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
                                                    <div wire:click="update({{ $alat->id }})" class="mb-3 text-center">
                                                        <button class="btn btn-outline-success mt-3">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                    <div class="container-fluid text-center m-5">
                        <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                    </div>
                    @endif
                    <div class="card-footer bg-gradient-lightblue rounded-bottom"></div>
                </div>
            </div>
        </div>
    </div>
</div>
