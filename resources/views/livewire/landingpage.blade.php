<div>
    <div class="container pt-5">
        <div class="card card-default elevation-2 p-2">
            <div class="row mb-3">
                <div class="col-3">
                    <button class="btn btn-info mb-2" data-toggle="modal" data-target="#tentang"> <i class="fas fa-plus"></i> Tambah </button>
                </div>
                <div class="card-body border">
                    @if ( $tentang && $tentang->count() > 0)
                    @foreach ( $tentang as $t )
                    <div class="col-12">
                        <div class="card elevation-2">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <h3>Tentang Kami</h3>
                                        <div class="p-1">
                                            {{ $t->deskripsi }}
                                        </div>
                                        <h5 class="text-muted">#{{ $t->judul }}</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="container-fluid rounded">
                                            <img style="height: 200px; width: 100%; " src="{{ asset( $t->gambar) }}" class="img-fluid img-thumbnail elevation-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-12">
                                        <button wire:click="tentangAktif({{ $t->id }})" class="btn btn-sm btn-outline-info">Aktif</button>
                                        <button wire:click="tentangEdit({{ $t->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#tentangUbah">Ubah</button>
                                        <button wire:click="tentangHapus({{ $t->id }})" class="btn btn-sm btn-outline-danger">Hapus</button>
                                        @if ( $t->status == 'aktif')
                                        <div class="badge bg-success float-right">AKTIF</div>
                                        @else
                                        <div class="badge badge-secondary float-right">NON-AKTIF</div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Tentang-->
                    <div wire:ignore.self class="modal fade" id="tentangUbah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">TENTANG KAMI</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="">Title</label>
                                        <input wire:model="title" type="text" class=" form-control form-control-sm" required>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="floatingTextarea2">Deskripsi</label>
                                        <textarea wire:model="deskripsi" class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Gambar</label>
                                        <input wire:model="gambar" type="file" name="" id="" class=" form-control">
                                    </div>
                                    @if ( $gambar)
                                    <img style="height: 300px; width: 100%; " src="{{ $gambar->temporaryUrl() }}">
                                    @else
                                    <img style="height: 300px; width: 100%; " src="{{ asset($t->gambar) }}" alt="" srcset="">
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button wire:click="tentangUpdate({{ $t->id }})" type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="alert alert-default-primary text-center"> Tidak ada Data</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default card-outline card-primary">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-3">
                                <button class=" btn btn-success" data-target="#riwayat" data-toggle="modal"> <i class="fas fa-plus text-bold"></i> Tambah </button>
                            </div>
                            <div class="col-5">
                                <h4 class=" float-right">Riwayat Pekerjaan</h4>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                    <div class="card-body elevation-3 ">
                        @if ( $dataRiwayat && $dataRiwayat->count() > 0)
                        <div class="row">
                            @foreach ( $dataRiwayat as $dr )
                            <div class="col-4 m-1">
                                <div class="card">
                                    <img style="height: 350px; width: 100%" src="{{asset($dr->image)}}" alt="">
                                    <div class="text p-2">
                                        <h4 class=" text-uppercase text-bold mb-0">{{ $dr->title }}</h4>
                                        <span class=" text-muted mb-2"> <i> {{ date('d-F-Y',strtotime($dr->created_at)) }}</i></span>
                                        <p>{{ $dr->deskripsi }}</p>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 p-2 ml-2">
                                            <button wire:click="riwayatEdit({{ $dr->id }})" class=" btn btn-outline-primary" data-toggle="modal" data-target="#riwayatEdit"><i class="fas fa-edit"></i> EDIT</button>
                                            <button class="btn btn-danger"> <i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Gambar-->
                            <div wire:ignore.self class="modal fade" id="riwayatEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">RIWAYAT</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="">Judul</label>
                                                <input wire:model="judulRiwayat" type="text" class=" form-control form-control-sm" required>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="floatingTextarea2">Deskripsi</label>
                                                <textarea wire:model="deskripsiRiwayat" class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Gambar</label>
                                                <input wire:model="gambarRiwayat" type="file" name="" id="" class=" form-control" required>
                                            </div>
                                            @if ( $gambarRiwayat)
                                    <img style="height: 300px; width: 100%; " src="{{ $gambarRiwayat->temporaryUrl() }}">
                                    @else
                                    <img style="height: 300px; width: 100%; " src="{{ asset($dr->image) }}" alt="" srcset="">
                                    @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button wire:click="updateRiwayat({{ $dr->id }})" type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="alert alert-default-primary text-center">
                            <h3>DATA BELUM ADA</h3>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tentang-->
    <div wire:ignore.self class="modal fade" id="tentang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TENTANG KAMI</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input wire:model="title" type="text" class=" form-control form-control-sm" required>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingTextarea2">Deskripsi</label>
                        <textarea wire:model="deskripsi" class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Gambar</label>
                        <input wire:model="gambar" type="file" name="" id="" class=" form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="simpanTentang" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Gambar-->
    <div wire:ignore.self class="modal fade" id="riwayat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">RIWAYAT</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Judul</label>
                        <input wire:model="judulRiwayat" type="text" class=" form-control form-control-sm" required>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingTextarea2">Deskripsi</label>
                        <textarea wire:model="deskripsiRiwayat" class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Gambar</label>
                        <input wire:model="gambarRiwayat" type="file" name="" id="" class=" form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="simpanRiwayat" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
