<div class="mb-3">
    <div class="row border-bottom ">
        <div class="col-4">
            <form action="/adm/pekerja">
                <div class="input-group m-2">
                    <input wire:model="cari" type="text" class="form-control" placeholder="Cari Material" aria-label="Cari Material" name="cari">
                </div>
            </form>
        </div>
        <div class="col-6"></div>
        <div class="col">
            <button class="btn bg-gradient-primary  shadow-md" data-toggle="modal" data-target="#TambahMaterial">Tambah</button>
            <a target="_blank" href=" {{ route('material.cetakall') }} " class="btn btn-outline-warning"> <i class="fas fa-print shadow-md"></i> </a>
        </div>

    </div>
    <div class="row mb-3">
        <div class="col-12">
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
                @if ( $data && $data->count() > 0)
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Aksi</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Material</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Masuk</th>
                                <th scope="col">Keluar</th>
                                <th scope="col">stok akhir</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $d )
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
                                <td> {{ $d->satuan}}</td>
                                <td> {{ number_format($d->harga_satuan,2)}}</td>
                                <td class="text-bold"> {{ $d->stok}}</td>
                                <td class="text-bold text-success"> {{ $d->masuk}}</td>
                                <td> {{ $d->keluar}}</td>
                                <td class="text-bold"> {{ $d->stok_akhir}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $data->links() }}
                </div>
                @else
                <div class="container-fluid text-center m-5">
                    <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="tambahMaterial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Upah {{ $idAhsp }} </h5>
                </div>
                <div class="modal-body">
                    <!-- <form wire:submit.prevent="tambahUpah"> -->
                    <div class="form-floating mb-3">
                        <label for="kode">kode</label>
                        <input wire:model="kode" type="text" class="form-control" id="kode">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="material">Material</label>
                        <input wire:model="material" type="float" class="form-control" id="material">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="satuan">satuan</label>
                        <input wire:model="satuan" type="text" class="form-control" id="satuan">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="harga">Harga Satuan</label>
                        <input wire:model="harga" type="number" class="form-control" id="floatingInput">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="editMaterial" type="submit" class="btn btn-primary">Tambah</button>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>