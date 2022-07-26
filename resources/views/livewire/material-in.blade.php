<div class="container-fluid">
    <div class="row border-bottom ">
        <div class="col-4">
            <div class="input-group m-2">
                <input wire:model="cari" type="text" class="form-control" placeholder="Cari Material" aria-label="Cari Material" name="cari">
            </div>

        </div>
        <div class="col-2">
            {{-- <div class="input-group m-2">
                <select class="form-control" wire:model="pilihcetak" name="" id="">
                    <option selected>Per Item</option>
                    <option value="all" selected>Semua</option>
                    @foreach ( $materialw as $data=>$cek )
                    @foreach ( $cek as $d )
                    @endforeach
                    <option value="{{ $d->material_id }}"> {{ $data }}</option>
                    @endforeach

                </select>
            </div> --}}
        </div>
        <!-- {{-- <div class="col-2 m-2">
            <a href="/cetak/{{ $pilihcetak }}" class="btn btn-outline-warning"> <i class="fas fa-print"></i> </a>
    </div> --}} -->
        <!-- <div class="col"><button class="btn bg-gradient-primary  shadow-md" data-toggle="modal" data-target="#TambahMaterial">Tambah</button></div> -->
    </div>
    <div class="row border-bottom ">
        {{-- <div class="col-4">
        </div>
        <div class="col-3">
            <div class="input-group m-2">
                <select class="form-control" wire:model="pilihcetak" name="" id="">
                    <option selected>Per Tangal Masuk</option>
                    <option value="all" selected>Semua</option>
                    @foreach ( $materialtgl as $data2=>$cek )
                    <option value="{{ $data2 }}"> {{ date('d F Y', strtotime($data2)) }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="col-3 m-2">
            <a target="_blank" href="/adm/material/cetak/{{ $pilihcetak }}" class="btn btn-outline-warning"> <i class="fas fa-print"></i> </a>
        </div> --}}
        <!-- <div class="col"><button class="btn bg-gradient-primary  shadow-md" data-toggle="modal" data-target="#TambahMaterial">Tambah</button></div> -->
    </div>
    <div class="row mb-3">
        <div class="col-9">
            <div class="card card-outline card-lightblue">
                <div class="card-header  text-center">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            Data Material Masuk
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
                @if( $materialin && $materialin->count() > 0 )
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Aksi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Material</th>
                                <th scope="col">Stok Awal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $materialin as $m )
                            <tr>
                                <th scope="row">
                                    <a wire:click="hapus({{ $m->id }})" onclick="return confirm('Hapus Data {{ $m->nama_material }}  ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a wire:click="edit({{ $m->id }})" href="" class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                </th>
                                <td> <i>{{ date('d F Y', strtotime($m->tanggal)) }}</i> </td>
                                <td>{{ $m->kode_material }}</td>
                                <td>{{ $m->nama_material }} </td>
                                <td>{{ $m->stok_awal }} </td>
                                <td class="text-center">
                                    <div class="badge badge-success"> <i class="fas fa-plus"></i> {{ $m->jumlah }}</div>
                                </td>
                                <td>
                                    <div class="badge badge-pill badge-success">{{ $m->satuan }}</div>
                                </td>
                                <td>Rp. {{ number_format($m->harga_satuan,2) }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="container-fluid text-center m-5">
                    <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                </div>
                @endif
                <!-- <div class="card-footer"></div> -->
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header bg-gradient-info text-center " disabled>
                    Tambah Data
                </div>
                <div class="card-body" height="200px">
                    <div class="input-group mb-3">
                        {{ $tanggal }}
                        <label for="tanggal">Tanggal Masuk</label>
                        <div class="input-group input-group-sm">
                            <input wire:model="tanggal" type="date" class="form-control mb-2" id="tanggal" name="tanggal" required data-toggle="datetimepicker">
                        </div>
                    </div>
                    <div class="input-group mb-3 row-cols-1">
                        <select wire:model="dropdown" class="form-select form-select-sm mb-2">
                            <option selected>Cari Material</option>
                            @foreach ( $material as $d )
                            <option value="{{ $d->id }}">
                                <h4>{{ $d->kode_material }} - <p>{{ $d->nama_material }}</p>
                                </h4>
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-9">
                            <input class="form-control" type="text" value="{{ $nama }}" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="col"><input class="form-control" type="text" value="{{ $kode }}" aria-label="Disabled input example" disabled readonly></div>
                    </div>
                    <div class="input-group mb-3">

                        <label for="jumlah">Jumlah</label> <br>
                        <div class="input-group input-group-sm mb-3">
                            <input wire:model="jumlah" type="number" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="satuan">Satuan</label> <br>
                        <div class="input-group input-group-sm ">
                            <input wire:model="satuan" type="text" class="form-control" id="satuan" name="satuan">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="satuan">Harga Satuan</label> <br>
                        <div class="input-group input-group-sm ">
                            <input wire:model="harga_satuan" type="number" class="form-control" id="satuan" name="satuan">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button wire:click="store" type="submit" class="btn btn-success"> <i class="fas fa-plus"></i> Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
</div>
