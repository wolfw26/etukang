<div>
    <div class="container p-2">
        <div class="row mt-3">
            <div class="col col-md-6">
                <input type="checkbox" value="tak hadir" wire:model="tes">
                {{ $tes }}
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
                                    <label for="jabatan" class="form-label">Nama Jabatan</label>
                                    <input wire:model="jabatan" type="text" class="form-control form-control-sm @error('jabatan')
                                        is-invalid
                                    @enderror " id="jabatan" placeholder="jabatan" required>
                                    @error('jabatan')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="gapok" class="form-label">Gaji Pokok</label>
                                    <input wire:model="gapok" type="number" class="form-control form-control-sm @error('sewa')
                                        is-invalid
                                    @enderror " name="gapok" id="gapok" placeholder="Gaji Pokok" required>
                                    @error('gapok')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="transport" class="form-label">Uang Transport</label>
                                    <input wire:model="transport" type="number" class="form-control form-control-sm @error('transport')
                                        is-invalid
                                    @enderror " id="transport" placeholder="transport">
                                    @error('transport')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="makan" class="form-label">uang Makan</label>
                                    <input wire:model="makan" type="number" class="form-control form-control-sm @error('makan')
                                        is-invalid
                                    @enderror " id="makan" placeholder="makan" required>
                                    @error('makan')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div wire:click="store" class="mb-3 text-center">
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
                                <h2 class="ml-4">Data Jabatan dan Gaji</h2>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 430px;">
                            @if ($data && $data->count() > 0)
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>

                                        <th scope="col">Aksi</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Gaji Pokok</th>
                                        <th scope="col">Uang Transport</th>
                                        <th scope="col">Uang Makan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ( $data as $d )
                                    <tr>

                                        <td class=" d-inline-flex justify-content-between">
                                            <a onclick="return confirm('Data Akan di Hapus') || event.stopImmediatePropagation()" wire:click="hapus({{ $d->id }})" class="btn btn-sm" title="hapus">
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                            <a wire:click="edit({{ $d->id }})" href="" type="button" class="btn btn-sm" data-toggle="modal" data-target="#edit{{ $d->id }}">
                                                <i class="fas fa-edit text-teal" title="Edit"></i>
                                            </a>
                                        </td>
                                        <td scope="col">{{ $d->jabatan }}</td>
                                        <td scope="col">{{'Rp. '. number_format($d->gapok,2) }}</td>
                                        <td scope="col">{{'Rp. '. number_format($d->transport,2) }}</td>
                                        <td scope="col">{{'Rp. '. number_format($d->makan,2) }}</td>

                                        <!-- Modal -->
                                        <div wire:ignore.self class="modal fade" id="edit{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Jabatan</h5>
                                                        @if (session()->has('update'))
                                                        <div class="alert alert-success">
                                                            {{ session('update') }}
                                                        </div>
                                                        @endif
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="jabatan" class="form-label">Nama Jabatan</label>
                                                                    <input value="{{ $d->jabatan }}" type="text" class="form-control form-control-sm @error('jabatan')
                                                                        is-invalid
                                                                    @enderror " id="jabatan" placeholder="jabatan">
                                                                    @error('jabatan')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                    @enderror
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="gapok" class="form-label">Gaji Pokok</label>
                                                                    <input value="{{ $d->gapok }}" wire:model="gapok" type="number" class="form-control form-control-sm @error('sewa')
                                                                        is-invalid
                                                                    @enderror " name="gapok" id="gapok" placeholder="Gaji Pokok" required>
                                                                    @error('gapok')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="transport" class="form-label">Uang Transport</label>
                                                                    <input wire:model="transport" type="number" class="form-control form-control-sm @error('transport')
                                                                        is-invalid
                                                                    @enderror " id="transport" placeholder="transport">
                                                                    @error('transport')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                    @enderror

                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="makan" class="form-label">uang Makan</label>
                                                                    <input wire:model="makan" type="number" class="form-control form-control-sm @error('makan')
                                                                        is-invalid
                                                                    @enderror " id="makan" placeholder="makan" required>
                                                                    @error('makan')
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
                                                        <button wire:click="update({{ $d->id }})" type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
</div>
