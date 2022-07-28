<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="mb-3 border border-dark text-center rounded elevation-1">
                    <h3>Invoice</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <button class="btn btn-primary btn-sm m-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Buat <br> Invoice
                    </button>
                </p>
                <div wire:ignore.self class="collapsing" id="collapseExample">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="">Kode </label>
                                    <input wire:model="kode" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Tanggal Invoice</label>
                                    <input wire:model="tglinvoice" type="date" class="form-control ">
                                </div>
                                <div class="mb-3">
                                    <label for="">Dari : </label>
                                    <input wire:model="dari" type="text" class="form-control">
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="">Deskripsi </label>
                                    <input wire:model="deskripsi" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Tanggal Jth. Tempo</label>
                                    <input wire:model="tgljapo" type="date" class="form-control ">
                                </div>
                                <div class="mb-3">
                                    <label for="Uploud Invoice"></label>
                                    <input wire:model="img_invoice" type="file" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button wire:click="buat" class="btn btn-success"> <i class="fas fa-plus"></i> Buat Invoice </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-info">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr class="text-center">
                                    <th>Aksi</th>
                                    <th>Alat DiSewa</th>
                                    <th>Kode</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal <br> Invoice</th>
                                    <th>Tanggal <br> Jth. tempo</th>
                                    <th>Dari</th>
                                    <th>Total</th>
                                    <th>Total <br> dibayar</th>
                                    <th>Sisa <br> dibayar</th>
                                    <th>Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $d )
                                <tr class="text-center">
                                    <td>
                                        <div class="d-flex">

                                            <a href=" {{ route('invoice.data',$d->id) }} " class="btn btn-sm bg-info">Detail</a>
                                            <a class="btn text-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <th>Jumlah</th>
                                                    <th>Total</th>
                                                </tr>
                                                @foreach ( $d->datainvoice as $di )
                                                <tr>
                                                    <td>{{ $di->deskipsi }}</th>
                                                    <td>{{ $di->jumlah }}/{{ $di->satuan }}</td>
                                                    <td>{{ $di->total }}</td>
                                                </tr>
                                                @endforeach
                                            </thead>
                                        </table>
                                        </td>
                                    <td scope="col">{{ $d->kode }}</td>
                                    <td>{{ $d->deskripsi }}</td>
                                    <td>{{ date('d-M-Y',strtotime($d->tanggal_invoice)) }}</td>
                                    <td>{{ date('d-M-Y',strtotime($d->tanggal_japo)) }}</td>
                                    <td>{{ $d->dari }}</td>
                                    <td>{{ 'Rp. '. number_format($d->total) }}</td>
                                    <td>{{ 'Rp. '. number_format($d->dibayar) }}</td>
                                    <td>{{  'Rp. '. number_format($d->sisa) }}</td>
                                    <td>
                                        <img class="profile-user-img img-fluid rounded" src=" {{ asset( $d->image_invoice) }} " alt="Invoice picture" width="300px" height="300px">
                                        <p>
                                            <a wire:click="unduh({{ $d->id }})" class="btn"><i class="fas fa-arrow-down"></i>Download</a>
                                        </p>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
