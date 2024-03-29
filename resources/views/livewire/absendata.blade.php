<div>
    <div class="container-fluid p-0">
        <div class="row mb-1">
            <div class="col-12">
                <div class="alert alert-heading alert-default-secondary">
                    <div class="row">
                        <div class="col-4 d-flex">
                            <input wire:model="tanggal" type="date" class="input-group m-2" placeholder="Tanggal Kerja">
                            <input wire:model="deskripsi" type="text" class="input-group m-2" placeholder="Deskripsi Pekerjaan">
                            <button wire:click="tambahAbsen" class="btn btn-sm btn-success p-2 m-2"><i class="fas fa-plus-circle"></i></button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if ( $absen && $absen->count() > 0)
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td scope="col">Tanggal</td>
                                    <td scope="col">Data Nama</td>
                                    <td scope="col">Deskripsi</td>
                                    <td scope="col">lembur</td>
                                    <td scope="col">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $absen as $d )
                                <tr>
                                    <td scope="col">{{ $d->tanggal }}</td>
                                    <td scope="col">
                                        <div class="row">
                                            <div class="col-8">
                                                <select class="form-control form-control-sm" wire:model="nama" name="pekerja" id="">
                                                    @foreach ( $pekerja as $p )
                                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button wire:click="tambahNama({{ $d->id }},{{ $proyek->id }})" class="btn btn-sm btn-outline-success"> <i class="fas fa-plus-circle"></i> </button>
                                            </div>
                                        </div>

                                        <div class="border p-2 mt-2 border-dark rounded-lg">
                                            @foreach ( $d->datanama as $dn )
                                            <p class="m-0"><i wire:click="hapuspekerja({{ $dn->id }})" class="fas fa-times text-danger"></i> {{ $dn->nama   }}- {{ $dn->id }} </p>
                                            @endforeach
                                        </div>

                                    </td>
                                    <td scope="col">{{ $d->deskripsi }}</td>
                                    <td scope="col">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lembur{{ $d->id }}">
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                        <div class="border p-2 mt-2 border-dark rounded-lg">
                                            @foreach ( $d->lembur as $lemburs )
                                            <p class="m-0 "><i wire:click="hapusLembur({{ $lemburs->id }})" class="btn fas fa-times text-danger"></i> {{ $lemburs->nama   }}</p>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>
                                        <a wire:click="hapus( {{ $d->id }} )" href="" onclick="return confirm('Data Akan di Hapus') || event.stopImmediatePropagation()" class="btn btn-sm" title="hapus">
                                            <i class="fas fa-trash text-danger"></i>
                                        </a>

                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div wire:ignore.self class="modal fade" id="lembur{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Absen Lembur</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $namaLembur }}
                                                <select wire:model="namaLembur" class="form-control form-control-sm mb-2" name="" id="">
                                                    <option selected>Pilih Nama</option>
                                                    @foreach ( $d->datanama as $dn )
                                                    <option value="{{ $dn->pekerja_id }}">{{ $dn->nama }}</option>
                                                    @endforeach
                                                </select>
                                                {{ $jamLembur }}
                                                <input wire:model="jamLembur" type="text" class="form-control form-control-sm" placeholder="jam">

                                                <input class="form-control" type="text" value="{{ $d->tanggal }}" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button wire:click="tambahLembur({{ $d->id }},{{ $proyek->id }})" type="button" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-default-warning">Data Kosong</div>
                        @endif
                        {{-- <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores architecto nesciunt illum nostrum sint delectus dignissimos pariatur natus veniam vel quas, porro cum eligendi! Natus nesciunt officiis commodi quibusdam!
                        Minus, reiciendis obcaecati cumque libero doloribus maiores voluptatum laboriosam non quo, dolores temporibus iste quisquam sequi, nobis explicabo omnis sint quod animi earum cum fugit sunt excepturi quos necessitatibus. Quam.
                        Cum mollitia ipsa qui corporis aspernatur soluta. Aliquam laborum quisquam magnam ipsam nostrum eum nisi odit! Ex provident incidunt magnam aperiam labore. Ipsam officiis cum error nesciunt nemo dolor rerum.
                        Magnam deserunt nostrum id est minus eum? Deserunt ut tempora nam beatae quod delectus fugiat soluta adipisci, eum reiciendis praesentium voluptatem nesciunt voluptatum voluptas repellendus quasi tempore enim at accusamus! </p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores architecto nesciunt illum nostrum sint delectus dignissimos pariatur natus veniam vel quas, porro cum eligendi! Natus nesciunt officiis commodi quibusdam!
                        Minus, reiciendis obcaecati cumque libero doloribus maiores voluptatum laboriosam non quo, dolores temporibus iste quisquam sequi, nobis explicabo omnis sint quod animi earum cum fugit sunt excepturi quos necessitatibus. Quam.
                        Cum mollitia ipsa qui corporis aspernatur soluta. Aliquam laborum quisquam magnam ipsam nostrum eum nisi odit! Ex provident incidunt magnam aperiam labore. Ipsam officiis cum error nesciunt nemo dolor rerum.
                        Magnam deserunt nostrum id est minus eum? Deserunt ut tempora nam beatae quod delectus fugiat soluta adipisci, eum reiciendis praesentium voluptatem nesciunt voluptatum voluptas repellendus quasi tempore enim at accusamus! </p> --}}
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
