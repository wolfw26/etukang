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
                        {{ $deskripsi }}
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input wire:model="deskripsi" type="text" class="form-control form-control-sm" id="deskripsi" placeholder="Deskripsi">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                    <input wire:model="tglm" type="date" class="form-control form-control-sm" id="tanggal_mulai" placeholder="Tanggal Mulai">

                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input wire:model="harga" type="number" class="form-control form-control-sm" id="harga" placeholder="Harga">

                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input wire:model="jumlah" type="number" class="form-control form-control-sm" id="jumlah" placeholder="jumlah">

                                </div>
                                <div wire:click="tambahSewa" class="mb-3 text-center">
                                    <button class="btn btn-outline-success mt-3">Tambah</button>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tempat_sewa" class="form-label">Tempat Sewa</label>
                                    <input wire:model="sewa" type="text" class="form-control form-control-sm" id="tempat_sewa" placeholder="Tempat Sewa">

                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_selesai" class="form-label">Tanggal selesai</label>
                                    <input wire:model="tgls" type="date" class="form-control form-control-sm" id="tanggal_selesai" placeholder="Tanggal Selesai">

                                </div>
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input wire:model="satuan" type="text" class="form-control form-control-sm" id="satuan" placeholder="Satuan">

                                </div>
                                <div class="mb-3">
                                    <label for="harga_total" class="form-label">Total Harga</label>
                                    <input wire:model="tharga" type="number" class="form-control form-control-sm" id="harga_total"
                                    placeholder="" disabled readonly>
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
                    <div class="card-header bg-gradient-lightblue text-center">Data Alat Sewa</div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 430px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Tempat Sewa</th>
                                        <th scope="col">Tanggal Mulai</th>
                                        <th scope="col">Tanggal Selesai</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Satuan</th>
                                        <th scope="col">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $d )
                                    <tr>
                                        <td scope="col">{{ $d->deskripsi }}</td>
                                        <td scope="col">{{ $d->tempat_sewa }}</td>
                                        <td scope="col">{{ $d->tanggal_mulai }}</td>
                                        <td scope="col">{{ $d->tanggal_selesai }}</td>
                                        <td scope="col">Rp. {{ number_format($d->harga)  }}</td>
                                        <td scope="col">{{ $d->satuan }}</td>
                                        <td scope="col">Rp. {{ number_format($d->harga_total) }}</td>
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
</div>
