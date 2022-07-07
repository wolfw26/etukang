<div class="container-fluid">

    <div class="row border-bottom ">
        <div class="col-4">
            <form action="/adm/pekerja">
                <div class="input-group m-2">
                    <input wire:model="cari" type="text" class="form-control" placeholder="Cari Material" aria-label="Cari Material" name="cari">
                </div>
            </form>
        </div>
        <div class="col-6"></div>
        <!-- <div class="col"><button class="btn bg-gradient-primary  shadow-md" data-toggle="modal" data-target="#TambahMaterial">Tambah</button></div> -->
    </div>
    <div class="row mb-3">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-gradient-success text-center">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            Data Material
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Aksi</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Material</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $materialin as $m )
                            <tr>
                                <th scope="row">
                                    <a wire:click="hapus({{ $m->id }})" onclick="return confirm('Hapus Data {{ $m->nama_material }}  ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="  " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                </th>
                                <td>{{ $m->kode_material }}</td>
                                <td>{{ $m->nama_material }} </td>
                                <td>{{ $m->jumlah }} </td>
                                <td>{{ $m->satuan }} </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- <div class="card-footer"></div> -->

                <div class="container-fluid text-center m-5">
                    <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                </div>

            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-gradient-success text-center " disabled>
                    Tambah Data
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        {{ $tanggal }}
                        <label for="tanggal">Tanggal Masuk</label>
                        <div class="input-group input-group-sm">
                            <input wire:model="tanggal" type="date" class="form-control mb-2" id="tanggal" name="tanggal" required data-toggle="datetimepicker">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select wire:model="dropdown"   class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                            <option selected>Cari Material</option>
                            @foreach ( $material as $d )
                            <option  value="{{ $d->id }}">
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
                        {{ $jumlah }}
                        <label for="jumlah">Jumlah</label> <br>
                        <div class="input-group input-group-sm mb-3">
                            <input wire:model="jumlah"  type="text" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        {{ $satuan }}
                        <label for="satuan">Satuan</label> <br>
                        <div class="input-group input-group-sm ">
                            <input wire:model="satuan" type="text" class="form-control" id="satuan" name="satuan">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button wire:click="store" type="submit" class="btn btn-success">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
