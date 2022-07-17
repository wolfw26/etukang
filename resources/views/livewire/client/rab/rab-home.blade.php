<div>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12">
                <div class="alert alert-default-secondary alert-dismissible shadow-2xl p-0 d-flex justify-content-center">
                    <h2>Halaman Rab </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if ($rab == null)
                        <div class="alert alert-default-primary m-2">RAB Belum Dibuat</div>
                    @else
                    {{-- @if ($status->rab->status = 'selesai')

                    @elseif ()

                    @endif --}}
                    <div class="card-header card-outline card-secondary">
                        <div class="row">
                            <div class="col-6">
                                <h5 class=" text-capitalize text-bold ">{{ $rab->nama_rab }}</h5>
                            </div>
                            <div class="col-6">
                                @if($rab->status == 'selesai')
                                <button type="submit" wire:click="setuju({{ $rab->id }})" class="btn badge badge-pill badge-success float-right m-1">Setuju</button>
                                <button type="submit" wire:click="perbaiki({{ $rab->id }})" class="btn badge badge-pill badge-warning float-right m-1">Perbaiki</button>
                            @endif

                            @if($rab->status == 'perbaiki')
                                <div class="badge badge-pill badge-primary float-right m-1">Sedang Diperbaiki</div>
                            @endif
                            @if($rab->status == null)
                                <div class="badge badge-pill badge-primary float-right m-1">Proses Pembuatan</div>
                            @endif
                            @if($rab->status == 'setuju')
                                <div class="badge badge-pill badge-success float-right m-1">Disetujui</div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($datarab->count() == 0)
                            <div class="alert alert-default-info"> Proses Pembuatan</div>
                        @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Rincian</th>
                                    <th scope="col">Volume</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $datarab as $d )
                                <tr>
                                    <td scope="col">{{ $d->rincian }}</td>
                                    <td scope="col">{{ $d->volume }}</td>
                                    <td scope="col">{{ $d->satuan }}</td>
                                    <td scope="col">{{ 'Rp.'. number_format($d->harga_satuan,2)  }}</td>
                                    <td scope="col">{{ 'Rp.'. number_format($d->total,2)  }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @endif
                    </div>
                    <div class="card-footer"></div>


                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
