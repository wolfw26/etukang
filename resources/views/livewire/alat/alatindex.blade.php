<div class="mt-3">
    <div class="container p-0 mt-3">
        <div class="alert bg-gradient-lightblue">
            <div class="row">
                <button wire:click="$set('pesan','all')" class="btn btn-outline-warning m-1 ">Semua</button>
                <button wire:click="$set('pesan','sewa')" class="btn btn-outline-warning m-1">Sewa</button>
                <button wire:click="$set('pesan','alat')" class="btn btn-outline-warning m-1">Alat Masuk</button>
                <button wire:click="$set('pesan','rusak')" class="btn btn-outline-warning m-1">Tidak Layak</button>
            </div>
        </div>
        <div class="container">
            @if ($pesan == 'all')
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
                        <div class="card-header bg-gradient-lightblue text-center">Data Alat</div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama Alat</th>
                                            <th scope="col">Fungsi</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Kepemilikan</th>
                                            <th scope="col">satuan</th>
                                            <th scope="col">harga satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $data as $alat )
                                        <tr>
                                            <td scope="col"> <u class="text-bold"> {{ $alat->kode }}</u> </td>
                                            <td scope="col" class=" text-capitalize "> {{ $alat->nama }} </td>
                                            <td scope="col"> {{ $alat->fungsi }} </td>
                                            <td scope="col"> {{ $alat->Merk }} </td>
                                            <td scope="col"> {{ $alat->status }} </td>
                                            <td scope="col"> {{ $alat->kepemilikan }} </td>
                                            <td scope="col"> {{ $alat->satuan }} </td>
                                            <td scope="col">Rp. {{ number_format($alat->harga_satuan,2) }} </td>
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
                        <div class="card-header bg-gradient-lightblue text-center">Data Alat</div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama Alat</th>
                                            <th scope="col">Fungsi</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Kepemilikan</th>
                                            <th scope="col">satuan</th>
                                            <th scope="col">harga satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $data as $alat )
                                        <tr>
                                            <td scope="col"> <u class="text-bold"> {{ $alat->kode }}</u> </td>
                                            <td scope="col" class=" text-capitalize "> {{ $alat->nama }} </td>
                                            <td scope="col"> {{ $alat->fungsi }} </td>
                                            <td scope="col"> {{ $alat->Merk }} </td>
                                            <td scope="col"> {{ $alat->status }} </td>
                                            <td scope="col"> {{ $alat->kepemilikan }} </td>
                                            <td scope="col"> {{ $alat->satuan }} </td>
                                            <td scope="col">Rp. {{ number_format($alat->harga_satuan,2) }} </td>
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

        @elseif($pesan == 'sewa')
        @livewire('alat.alatsewa')
        @elseif($pesan == 'alat')
        @livewire('alat.alatin')
        @elseif($pesan == 'rusak')
        @livewire('alat.alatrusak')
        @endif
    </div>
</div>
