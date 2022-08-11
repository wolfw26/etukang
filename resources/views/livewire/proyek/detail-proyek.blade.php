<div class="m-0 p-0">
    <div class="alert alert-info text-center text-capitalize mt-2"> {{ $proyek->nama_proyek }} </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-navy">
                    <div class="card-body p-0">
                        <div class="row ">
                            <div class="col-4 p-2">
                                <div class="card m-2 elevation-2" style="width: 18 rem ;">
                                    <div class="container-fluid rounded">
                                        <img style="height: 200px; width: 100%; " src="{{ asset( $client->foto_ktp) }}" class="img-fluid ">
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                        </tr>
                                        <tr>
                                            @if ( $proyek->tanggal_mulai == null && $proyek->tanggal_selesai == null || $tanggalKerja == 'edit')
                                            <td> <input wire:model="tglMulai" type="date" class="form-control form-control-sm"> </td>
                                            <td> <input wire:model="tglSelesai" type="date" class="form-control form-control-sm"> </td>
                                            <td> <button wire:click="tambahTanggal" class="btn btn-smn btn-success"> <i class="fas fa-plus"></i> </button> </td>
                                            @else
                                            <td>{{ $proyek->tanggal_mulai }}</td>
                                            <td>{{ $proyek->tanggal_selesai }}</td>
                                            <td><button wire:click="editTanggal" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Ubah </button></td>
                                            @endif
                                            {{-- @if ( $tanggalKerja != 'selesai')
                                                <td>{{ $proyek->tanggal_mulai }}</td>
                                            <td>{{ $proyek->tanggal_selesai }}</td>

                                            @elseif ( $tanggalKerja != 'edit') --}}

                                            {{-- @endif --}}

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4 ">
                                <table class="table  mt-3">
                                    <tr>
                                        <th>Pemilik : </th>
                                        <td>{{ $proyek->client->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat : </th>
                                        <td>{{ $proyek->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Luas Tanah : </th>
                                        <td>{{ $proyek->luas_tanah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Panjang Bangunan : <br> Lebar Bangunan </th>
                                        <td>{{ $proyek->panjang_rumah }} <br> {{ $proyek->lebar_rumah }}</td>
                                    </tr>
                                    <tr>
                                        <th> Tukang : </th>
                                        @if ( $proyek->pekerja_id != 0)
                                        @if ( $editTukang != 1 )
                                        <td>
                                            <div class="row">
                                                <div class="col-9">{{ $proyek->pekerja->nama }}</div>
                                                <div class="col-3">
                                                    <button wire:click="editPekerja" class="btn btn-sm bg-cyan">Ubah</button>
                                                </div>
                                            </div>
                                        </td>
                                        @else
                                        <td>
                                            <div class="row">
                                                <div class="col-10">
                                                    <select wire:model="TukangProyek" name="" id="" class="form-control form-control-sm">
                                                        <option selected> Pekerja</option>
                                                        @foreach ( $pekerjaData as $pekerja )
                                                        <option value="{{ $pekerja->id }}">{{ $pekerja->nama }}-{{ $pekerja->jabatan->jabatan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-2">
                                                    <button wire:click="tambahTukang" class="btn btn-sm bg-success"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        @endif

                                        @else
                                        <td>
                                            <div class="row">
                                                <div class="col-10">
                                                    <select wire:model="TukangProyek" name="" id="" class="form-control form-control-sm">
                                                        <option selected> Pekerja</option>
                                                        @foreach ( $pekerjaData as $pekerja )
                                                        <option value="{{ $pekerja->id }}">{{ $pekerja->nama }}-{{ $pekerja->jabatan->jabatan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-2">
                                                    <button wire:click="tambahTukang" class="btn btn-sm bg-success"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        @endif

                                    </tr>
                                </table>
                            </div>
                            <div class="col-4">
                                <div class="mt-2 text-center ">
                                    <div class="alert
                                    @if ( $proyek->status == " PERENCANAAN" ) alert-default-primary @elseif( $proyek->status == "DIKERJAKAN")
                                        alert-success
                                        @else
                                        alert-light
                                        @endif">{{ $proyek->status }}</div>
                                </div> <br>
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                <div class="form-check">
                                                    <input wire:model="radio" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="PERENCANAAN" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Perencanaan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input wire:model="radio" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="DIKERJAKAN">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Dikerjakan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input wire:model="radio" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="SELESAI">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Selesai
                                                    </label>
                                                </div>
                                                <button wire:click="status({{ $proyek->id }})" class="btn btn-success"> <i class="fas fa-plus"></i>Tetapkan</button>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-dark m-2 p-2 elevation-2">
                            <div class="col-7">
                                <div class="row m-2">
                                    <div class="col-4">
                                        {{ $pekerjaan }}
                                        <select wire:model="pekerjaan" name="" id="" class="form-control form-control-sm">
                                            <option selected>Tambah Rencana Kerja</option>
                                            @if ( $rab && $rab->count() > 0)
                                            @foreach ( $rab->datarab as $rabdata )
                                            <option value="{{ $rabdata->id }}">{{ $rabdata->rincian }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <button wire:click="tambahRencana" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Tambah</button>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Rincian Pekerjaan</th>
                                            <th>volume</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Aksi</th>
                                            <th>Status</th>
                                            <th>Ubah Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ( $rencanaKerja && $rencanaKerja->count() > 0 )
                                        @foreach ( $rencanaKerja as $rk )
                                        <tr>
                                            <td>{{ $rk->keterangan }}</td>
                                            <td>{{ $rk->datarab->volume }} {{ $rk->datarab->satuan }}</td>
                                            <td scope="col">
                                                @if ( $rk->tanggal_mulai != null )
                                                @if ( $ubahStatus == 'edit')
                                                <input wire:model="rencanaAwal" type="date" class="form-control">
                                                @else
                                                {{ date('d-M-Y',strtotime($rk->tanggal_mulai)) }}
                                                @endif
                                                @else
                                                <input wire:model="rencanaAwal" type="date" class="form-control">
                                                @endif
                                            </td>
                                            <td>
                                                @if ( $rk->tanggal_selesai != null )
                                                @if ( $ubahStatus == 'edit')
                                                <input wire:model="rencanaAkhir" type="date" class="form-control form-control-sm">
                                                @else
                                                {{ date('d-M-Y',strtotime($rk->tanggal_selesai)) }}
                                                @endif
                                                @else
                                                <input wire:model="rencanaAkhir" type="date" class="form-control form-control-sm">
                                                @endif
                                            </td>
                                            <td>
                                                @if ( $ubahStatus != 'edit')
                                                @if ( $rk->tanggal_selesai != null )
                                                <button wire:click="ubahRencana({{ $rk->id }})" class="btn btn-sm btn-info">Ubah</button>
                                                @else
                                                <button wire:click="addTanggal({{ $rk->id }})" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></button>
                                                @endif
                                                @else
                                                <button wire:click="addTanggal({{ $rk->id }})" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></button>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="badge badge-info">{{ $rk->status }}</div> <br>

                                            </td>
                                            <td>
                                                @if ( $rk->status != 'selesai')
                                                <div wire:click="selesai({{ $rk->id }})" class="badge badge-success btn">Selesai</div>
                                                @else
                                                <div wire:click="belum({{ $rk->id }})" class="badge badge-secondary btn">Belum Selesai</div>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <div class="alert alert-default-info">
                                            <h5>Belum Dibuat</h5>
                                        </div>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-5">
                                <div class="alert alert-default-info text-center">
                                    <h5> RAB </h5>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Rincian</th>
                                            <th>Volume/Satuan</th>
                                            <th>Harga Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ( $rab && $rab->count() > 0)


                                        @foreach ( $rab->datarab as $dr )
                                        <tr>
                                            <td>{{ $dr->rincian }}</td>
                                            <td>{{ $dr->volume }} {{ $dr->satuan }}</td>
                                            <td>{{ 'Rp.' . number_format($dr->harga_satuan) }}</td>
                                            <td>{{ 'Rp.'. number_format($dr->total) }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if ( $proyek->material->count() > 0)
            <div class="col-6">
                <div class="continer">
                    <div class="card card-outline card-cyan">
                        <div class="card-header">
                            <div class="text-center"> <strong> <i>Material</i></strong></div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Material</th>
                                        <th>Jumlah/satuan</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $proyek->material as $mp )
                                    <tr>
                                        <td>{{ $mp->kode_material }}</td>
                                        <td>{{ $mp->nama_material }}</td>
                                        <td>{{ $mp->jumlah }}/{{ $mp->satuan }}</td>
                                        <td>{{ 'Rp.'. number_format($mp->harga_satuan) }}</td>
                                        <td>{{ $mp->jumlah * $mp->harga_satuan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-6"></div>
        </div>
        <div class="card card-success">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <div class="card-body" style="height: 300px">
                                <div class="m-lg-5 p-5 text-center">
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn"><i class="fas fa-plus fa-4x" title="Uploud gambar"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ( $proyek->gambar as $s )
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="{{ asset( $s->gambar) }}" alt="">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class=" p-2">
                                    <h5 class="card-title text-maroon font-weight-bolder text-lightblue mt-4">{{ $s->deskripsi }}</h5>
                                    <p class="card-text text-white pb-2 pt-1">{{ $s->lain_lain }}</p>

                                    <a wire:click="deleteImage({{ $s->id }})" class="mt-1 bg-transparent" onclick="return confirm('Data Akan di Hapus') || event.stopImmediatePropagation()"><i class="fas fa-trash float-right btn btn-outline-danger"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset( $client->foto_ktp) }}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Uploud Gambar</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input wire:model="deskripsi" type="text" placeholder="deskripsi" class="form-control form-control-sm">
                    @error('deskripsi')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Lain-lain</label>
                    <input wire:model="lain" type="text" placeholder="lain-lain" class="form-control form-control-sm">
                    @error('lain')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Gambar Proyek</label> <br>
                    <input wire:model="image" type="file" name="" id="" placeholder="Gambar.." class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a wire:click="addImage({{ $proyek->id }})" class="btn btn-success">Uploud</a>
            </div>
        </div>
    </div>
</div>
</div>
