<div>
    <div class="container-fluid">
        <div class="alert alert-default-primary text-center font-bold">SUPLIER</div>
        <div class="row text-center">
            <div class="col-6">
                <div class="card card-outline card-fuchsia m-2 elevation-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Kode Suplier</label>
                                    <input wire:model="kode" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <label for="">Nama Suplier</label>
                                    <input wire:model="nama" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <label for="">Alamat</label>
                                    <input wire:model="alamat" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <label for="">No Rek.</label>
                                    <input wire:model="norek" type="number" class="form-control form-control-sm">
                                </div>
                                <button wire:click="tambah" class="btn btn-sm btn-outline-success">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-2">
                <div class="card card-outline card-fuchsia elevation-2">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Rek</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $d )
                                <tr class="text-center">
                                    <td class="text-bold">{{ $d->kode }}</td>
                                    <td>{{ $d->nama }}</td>
                                    <td>{{ $d->alamat }}</td>
                                    <td>{{ $d->norek }}</td>
                                    <td>
                                        <button class="btn btn-sm" wire:click="hapus({{ $d->id }})"> <i class="fas fa-trash "></i></button>
                                        <button class="btn btn-sm" data-toggle="modal" data-target="#edit" wire:click="edit({{ $d->id }})"> <i class="fas fa-edit "></i></button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div wire:ignore.self class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="">Kode Suplier</label>
                                                    <input wire:model="kode" type="text" class="form-control form-control-sm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Nama Suplier</label>
                                                    <input wire:model="nama" type="text" class="form-control form-control-sm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Alamat</label>
                                                    <input wire:model="alamat" type="text" class="form-control form-control-sm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">No Rek.</label>
                                                    <input wire:model="norek" type="number" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button wire:click="update({{ $d->id }})" type="button" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
