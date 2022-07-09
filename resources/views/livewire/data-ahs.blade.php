<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <button data-toggle="modal" data-target="#tambahUpah" class="btn btn-outline-secondary m-1"> <i class="fas fa-plus text-cyan"></i> Upah Pekerja</button>

                            <button data-toggle="modal" data-target="#tambahBahan" class="btn btn-outline-secondary m-1"><i class="fas fa-plus text-cyan"></i> Bahan Material</button>

                            <button data-toggle="modal" data-target="#tambahAlat" class="btn btn-outline-secondary m-1"> <i class="fas fa-plus text-cyan"></i> Alat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 p-3">
                                <div class="card">
                                    <div class="card-header bg-green">Data AHS</div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Aksi</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Koefisien</th>
                                                    <th scope="col">Satuan</th>
                                                    <th scope="col">Harga Satuan</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $data as $d )
                                                <tr class="text-uppercase">
                                                    <th scope="row">
                                                        <a href="{{ route('ahspdata.delete',$d->id) }}" onclick="return confirm('Hapus Data');">
                                                            <i class="fas fa-trash text-danger"></i>
                                                        </a>
                                                    </th>
                                                    <td class="text-uppercase">{{ $d->kategori }}</td>
                                                    <td>{{ $d->rincian }}</td>
                                                    <td>{{ $d->volume }}</td>
                                                    <td>{{ $d->satuan }}</td>
                                                    <td>{{ number_format($d->harga_satuan,2)  }}</td>
                                                    <td>{{ number_format($d->total,2)  }}</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="container-fluid border border-dark">
                                            <div class="row">
                                                <div class="col-10 text-bold">Total Upah</div>
                                                <div class="col-2 text-bold text-muted bg-info text-center"> {{number_format( $ahsp->total_upah,2)}} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10 text-bold">Total Bahan</div>
                                                <div class="col-2 text-bold text-muted bg-info text-center"> {{number_format( $ahsp->total_bahan,2) }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10 text-bold">Total Alat</div>
                                                <div class="col-2 text-bold text-muted bg-info text-center"> {{number_format( $ahsp->total_alat,2) }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10 text-bold">Total</div>
                                                <div class="col-2 text-bold text-muted bg-info text-center"> {{ number_format($ahsp->total,2)  }} </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button data-toggle="modal" data-target="#TambahAhs">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    @livewire('t-upah',['ahsp' => $ahsp])

    @livewire('t-bahan',['ahsp' => $ahsp])

    @livewire('t-alat',['ahsp' => $ahsp])

</div>