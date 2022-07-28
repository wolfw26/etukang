<div>
    <div class="container-fluid">
        <div class="card card-body mt-2">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <select wire:model="alatsewa" name="" id="" class="form-control form-control-sm">
                            <option selected> -- Alat disewa --</option>
                            @foreach ( $alat as $sewa )
                                <option value="{{ $sewa->id }}">{{ $sewa->deskripsi }} - {{ $sewa->tempat_sewa }} - {{ $sewa->harga_total }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button wire:click="tambah" class="btn btn-success"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-default-secondary text-center border text-uppercase"> <h2>Invoice {{ $invoice->deskripsi }}</h2>  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <table class="table">
                                <tr>
                                    <th>Dari :</th>
                                    <td class=" font-weight-bold">{{ $invoice->dari }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Invoice :</th>
                                    <td>{{ date('d-M-Y',strtotime($invoice->tanggal_invoice)) }} </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Jatuh Tempo :</th>
                                    <td>{{ date('d-M-Y',strtotime($invoice->tanggal_japo)) }} </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <img class=" img-thumbnail img-fluid rounded" src=" {{ asset( $invoice->image_invoice) }} " alt="Invoice picture">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-center">Data Alat</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>Kode</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal Mulia <br> Tanggal Selesai </th>
                                        <th>Harga/satuan</th>
                                        <th>Jumlah</th>
                                        <th>Total <br> Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $d )
                                    <tr class="text-center font-semibold font-mono">
                                        <td>{{ $d->alatsewa->kode }}</td>
                                        <td>{{ $d->deskipsi }}</td>
                                        <td>{{ date('d-M-Y',strtotime($d->alatsewa->tanggal_mulai)) }} <br>{{ date('d-M-Y',strtotime($d->alatsewa->tanggal_selesai ))}} </td>
                                        <td>{{ $d->alatsewa->harga }}/{{ $d->alatsewa->satuan }}</td>
                                        <td>{{ $d->jumlah }} - {{ $d->alatsewa->satuan }}</td>
                                        <td>{{'Rp. '. number_format($d->total) }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <td class="text-center">{{ 'Rp. '. number_format($invoice->total) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-secondary mt-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
