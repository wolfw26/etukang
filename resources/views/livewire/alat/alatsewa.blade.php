<div>
    <div class="container p-2">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-light elevation-2">
                    <button wire:click="alat" class="btn btn-outline-warning m-2 elevation-1">Alat</button>
                    <button wire:click="invoice" class="btn btn-outline-warning m-2 elevation-1">Invoice</button>
                </div>
            </div>
        </div>
        @if ( $menu == 'invoice')
        @livewire('invoice-sewa')
        @else
        <div class="row">
            <div class="col col-md-12">
                <p>
                    <button class="btn btn-primary btn-sm m-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Tambah
                    </button>
                </p>
                <div wire:ignore.self class="collapsing" id="collapseExample">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <select wire:model="pilihalat" name="" id="" class="form-control form-control-sm">
                                        <option value="" selected></option>
                                        @foreach ( $alat as $alats )
                                        <option value="{{ $alats->id }}">{{ $alats->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('pilihalat')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kode" class="form-label">Kode</label>
                                    <input wire:model="kode" type="text" class="form-control form-control-sm @error('kode')
                                        is-invalid
                                    @enderror " id="kode" placeholder="kode" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input wire:model="deskripsi" type="text" class="form-control form-control-sm @error('deskripsi')
                                        is-invalid
                                    @enderror " id="deskripsi" placeholder="Deskripsi" required readonly>
                                    @error('deskripsi')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Merk</label>
                                    <input wire:model="merk" type="text" class="form-control form-control-sm" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="">Fungsi</label>
                                    <input wire:model="fungsi" type="text" class="form-control form-control-sm" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input wire:model="harga" type="number" class="form-control form-control-sm @error('harga')
                                        is-invalid
                                    @enderror " id="harga" placeholder="Harga" readonly>
                                    @error('harga')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input wire:model="satuan" type="text" class="form-control form-control-sm @error('satuan')
                                        is-invalid
                                    @enderror " id="satuan" placeholder="Satuan" readonly>
                                    @error('satuan')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="tempat_sewa" class="form-label">Tempat Sewa</label>
                                    <input wire:model="sewa" type="text" class="form-control form-control-sm @error('sewa')
                                        is-invalid
                                    @enderror " name="tempat_sewa" id="tempat_sewa" placeholder="Tempat Sewa" required>
                                    @error('sewa')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                    <input wire:model="tglm" type="date" class="form-control form-control-sm" id="tanggal_mulai" placeholder="Tanggal Mulai">
                                    @error('tglm')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_selesai" class="form-label">Tanggal selesai</label>
                                    <input wire:model="tgls" type="date" class="form-control form-control-sm" id="tanggal_selesai" placeholder="Tanggal Selesai">
                                    @error('tgls')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    @if ( $satuan == 'hari')
                                    <label for="jumlah_hari" class="form-label">Jumlah Hari</label>
                                    @else
                                    <label for="jumlah_hari" class="form-label">Jumlah Jam</label>
                                    @endif
                                    <input wire:model="jumlah_hari" type="number" class="form-control form-control-sm @error('jumlah_hari')
                                        is-invalid
                                    @enderror " id="jumlah_hari" placeholder="Jumlah Hari" required>
                                    @error('jumlah_hari')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah Alat</label>
                                    <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                        is-invalid
                                    @enderror " id="jumlah" placeholder="jumlah" required>
                                    @error('jumlah')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="harga_total" class="form-label">Total Harga</label>
                                    <input wire:model="tharga" type="number" class="form-control form-control-sm" id="harga_total" placeholder="" disabled readonly>
                                </div>
                                <div wire:click="tambahSewa" class="mb-3 text-center">
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
                    <div class="card-header bg-gradient-lightblue p-2">
                        <div class="row ">
                            <div class="col-4 text-start p-2">
                                <div class="input-group mr-4">
                                    <input wire:model="cari" type="text" class="form-control form-control-sm" placeholder="Cari Material" aria-label="Cari Material" name="cari">
                                </div>
                            </div>
                            <div class="col-8">
                                <h2 class="ml-4">Data Alat Sewa</h2>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 430px;">
                            @if ($data && $data->count() > 0)
                            <table class="table table-head-fixed text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Aksi</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Tempat Sewa</th>
                                        <th scope="col">Tanggal Mulai <br> Tanggal Selesai</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Satuan</th>
                                        <th> Jumlah <br> Alat</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Kode Invoice</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ( $data as $d )
                                    <tr @if ( Carbon\Carbon::now()->diffInDays($d->tanggal_selesai,false) > 0)
                                        class=" bg-gradient-orange text-light"
                                        @endif >
                                        <th scope="row">
                                            @if ( $d->sisa > 0)
                                            <a wire:click="pelunasan({{ $d->id }})" class="btn btn-sm btn-outline-primary" title="Pelunasan"><i class="fas fa-money-check"></i></a>
                                            @endif
                                            <a onclick="return confirm('Data {{ $d->deskripsi }} Akan di Hapus') || event.stopImmediatePropagation()" wire:click="hapus({{ $d->id }})" class="btn btn-sm btn-outline-danger ">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a wire:click="edit({{ $d->id }})" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#edit{{ $d->id }}">
                                                <i class="fas fa-edit" title="Edit"></i>
                                            </a>
                                        </th>
                                        <td scope="col"> <i class=" text-bold "></i> {{ $d->kode }} </td>
                                        <td scope="col">{{ $d->deskripsi }}</td>
                                        <td scope="col">{{ $d->tempat_sewa }}</td>
                                        <td scope="col">{{ date('d F Y', strtotime($d->tanggal_mulai)) }} <br>{{ date('d F Y', strtotime($d->tanggal_selesai,False)) }}</td>
                                        <td scope="col">Rp. {{ number_format($d->harga)  }}</td>
                                        <td scope="col">{{ $d->satuan }}</td>
                                        <td scope="col">{{ $d->jumlah }}</td>
                                        <td scope="col">Rp. {{ number_format($d->harga_total) }}</td>
                                        <td scope="col">
                                            @foreach ( $d->invoiceAlat as $a )
                                            {{ $a->invoice->kode}}</td>
                                            @endforeach
                                    </tr>
                                    <!-- Modal -->
                                    <div wire:ignore.self class="modal fade" id="edit{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Sewa {{ $d->deskripsi }}</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            {{-- <div class="mb-3">
                                                                <select wire:model="pilihalat" name="" id="" class="form-control form-control-sm">
                                                                    <option value="" selected></option>
                                                                    @foreach ( $alat as $alats )
                                                                    <option value="{{ $alats->id }}">{{ $alats->nama }}</option>
                                                            @endforeach
                                                            </select>
                                                            @error('pilihalat')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div> --}}
                                                        <div class="mb-3">
                                                            <label for="kode" class="form-label">Kode</label>
                                                            <input wire:model="kode" type="text" class="form-control form-control-sm @error('kode')
                                                                    is-invalid
                                                                @enderror " id="kode" placeholder="kode" required readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                                            <input wire:model="deskripsi" type="text" class="form-control form-control-sm @error('deskripsi')
                                                                    is-invalid
                                                                @enderror " id="deskripsi" placeholder="Deskripsi" required readonly>
                                                            @error('deskripsi')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="">Merk</label>
                                                            <input wire:model="merk" type="text" class="form-control form-control-sm" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="">Fungsi</label>
                                                            <input wire:model="fungsi" type="text" class="form-control form-control-sm" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="harga" class="form-label">Harga</label>
                                                            <input wire:model="harga" type="number" class="form-control form-control-sm @error('harga')
                                                                    is-invalid
                                                                @enderror " id="harga" placeholder="Harga">
                                                            @error('harga')
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

                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <label for="tempat_sewa" class="form-label">Tempat Sewa</label>
                                                            <input wire:model="sewa" type="text" class="form-control form-control-sm @error('sewa')
                                                                    is-invalid
                                                                @enderror " name="tempat_sewa" id="tempat_sewa" placeholder="Tempat Sewa" required>
                                                            @error('sewa')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                                            <input wire:model="tglm" type="date" class="form-control form-control-sm" id="tanggal_mulai" placeholder="Tanggal Mulai">
                                                            @error('tglm')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanggal_selesai" class="form-label">Tanggal selesai</label>
                                                            <input wire:model="tgls" type="date" class="form-control form-control-sm" id="tanggal_selesai" placeholder="Tanggal Selesai">
                                                            @error('tgls')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jumlah_hari" class="form-label">Jumlah Hari</label>
                                                            <input wire:model="jumlah_hari" type="number" class="form-control form-control-sm @error('jumlah_hari')
                                                                    is-invalid
                                                                @enderror " id="jumlah_hari" placeholder="Jumlah Hari" required>
                                                            @error('jumlah_hari')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jumlah" class="form-label">Jumlah Alat</label>
                                                            <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                                                    is-invalid
                                                                @enderror " id="jumlah" placeholder="jumlah" required>
                                                            @error('jumlah')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <label for="harga_total" class="form-label">Total Harga</label>
                                                            <input wire:model="tharga" type="number" class="form-control form-control-sm" id="harga_total" placeholder="" disabled readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="">Pembayaran</label> <br>
                                                            <input wire:model="dibayar" type="number" class="form-controol form-control-sm">
                                                            @error('dibayar')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="">Sisa Pembayaran</label> <br>
                                                            <input wire:model="sisa" type="number" class="form-controol form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button wire:click="update({{ $d->id }})" type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                                            </div>
                                        </div>
                                    </div>
                        </div>
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
    @endif
</div>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="editSewa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @if (session()->has('berhasil'))
                <div class="alert alert-success">
                    {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <h5 class="modal-title" id="exampleModalLabel"></h5>

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
                            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                            <input wire:model="tglm" type="date" class="form-control form-control-sm" id="tanggal_mulai" placeholder="Tanggal Mulai">

                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input wire:model="harga" type="number" class="form-control form-control-sm @error('harga')
                                    is-invalid
                                @enderror " id="harga" placeholder="Harga">
                            @error('harga')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input wire:model="jumlah" type="number" class="form-control form-control-sm @error('jumlah')
                                    is-invalid
                                @enderror " id="jumlah" placeholder="jumlah" required>
                            @error('jumlah')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode</label>
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
                            <label for="tempat_sewa" class="form-label">Tempat Sewa</label>
                            <input wire:model="sewa" type="text" class="form-control form-control-sm @error('sewa')
                                    is-invalid
                                @enderror " name="tempat_sewa" id="tempat_sewa" placeholder="Tempat Sewa" required>
                            @error('sewa')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">Tanggal selesai</label>
                            <input wire:model="tgls" type="date" class="form-control form-control-sm" id="tanggal_selesai" placeholder="Tanggal Selesai">

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
                        <div class="mb-3">
                            <label for="harga_total" class="form-label">Total Harga</label>
                            <input wire:model="tharga" type="number" class="form-control form-control-sm" id="harga_total" placeholder="" disabled readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click="update" type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
</div>
