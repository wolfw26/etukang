<div>
    @if ( $proyek && $Proyek->count() > 0)
    <div class="container">
        <div class="card card-default elevation-2">
            <div class="card-body p-1">
                <h3 class="text-center mb-3">Halaman Absen</h3> <br>
                <h5 class=" font-mono text-center text-capitalize "> </h5>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-default-secondary m-2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="">Tanggal Kerja</label>
                                        <input wire:model="tanggal" type="date" class="form-control form-control-sm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Deskripsi</label>
                                        <div class="form-floating">
                                            <textarea wire:model="deskripsi" class="form-control" placeholder="Deskripsi Pekerjaan" id="floatingTextarea"></textarea>

                                        </div>
                                    </div>
                                    <button wire:click="tambahAbsen" class="btn btn-outline-success"> <i class="fas fa-plus"></i>Tambah</button>
                                </div>
                                <div class="col-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-default elevation-2">
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
                        <td scope="col">{{ date('d-M-Y',strtotime($d->tanggal)) }}</td>
                        <td scope="col">
                            <div class="row">
                                <div class="col-8">
                                    <select class="form-control form-control-sm" wire:model="nama" name="pekerja" id="">
                                        @foreach ( $pekerja as $p )
                                        <option value="{{ $p->id }}">{{ $p->nama }}-{{ $p->jabatan->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <button wire:click="tambahNama({{ $d->id }},{{ $proyek->id }})" class="btn btn-sm btn-outline-success"> <i class="fas fa-plus-circle"></i> </button>
                                </div>
                            </div>
                            <div class="border p-2 mt-2 border-dark rounded-lg">
                                @foreach ( $d->datanama as $dn )
                                <p class="m-0"><i wire:click="hapuspekerja({{ $dn->id }})" class="fas fa-times text-danger"></i> {{ $dn->nama }} {{'('. $dn->pekerja->jabatan->jabatan .')' }} </p>
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
                                <p class="m-0 "><i wire:click="hapusLembur({{ $lemburs->id }})" class="btn fas fa-times text-danger"></i> {{ $lemburs->nama }}-{{ $lemburs->jumlah  .'- Jam' }}</p>
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
                                    <select wire:model="namaLembur" class="form-control form-control-sm mb-2" name="" id="">
                                        <option selected>Pilih Nama</option>
                                        @foreach ( $d->datanama as $dn )
                                        <option value="{{ $dn->pekerja_id }}">{{ $dn->nama }}</option>
                                        @endforeach
                                    </select>
                                    <div class="mb-2">
                                        <label for="">Jumlah Jam Lembur</label>
                                        <input wire:model="jamLembur" type="text" class="form-control form-control-sm" placeholder="jam">
                                    </div>

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
        </div>
    </div>
    @else
    <div class="alert alert-default-info">
        <h4 class="text-center">Belum Ada Proyek Yang Dikerjakan</h4>
    </div>
    @endif
</div>
