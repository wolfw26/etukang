@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="callout callout-info text-center">
        <h5 class=" font-bold">Rencana Anggaran Biaya {{ $rabdata->nama_rab }} </h5>
    </div>
    <div class="row m-2">
        <div class="col-6">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Volume</th>
                        <th>Satuan</th>
                        <th scope="col" class="w-35 ">Pilih AHS</th>
                        <th scope="col" class="w-20 ">Aksi</th>
                        <th scope="col"> Total</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="{{ route('rab.add',$rab_id )  }}" method="post">
                            @csrf
                            <input type="hidden" name="rab_id" id="rab_id" value="{{ $rab_id }}">
                            <td>
                                <div class="form-floating">
                                    <input type="text" name="volume_rab" id="volume_rab" placeholder="Volume Pekerjaan" required>
                                </div>
                                @error( 'volume_rab')
                                    <div class="text-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </td>
                            <td>

                            </td>
                            <td>
                                <select class="form-select form-control" id="ahs" name="ahs" required>
                                    <option class=" active" disabled>AHS</option>
                                    @foreach ( $ahs as $d )
                                    <option value="{{ $d->id }}">{{ $d->kode_ahs }} -({{ $d->satuan }}) {{ $d->nama_ahs }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i></button>
                            </td>
                        </form>

                            <th> <a href="{{ route('rab.total',$rabdata->id) }}" class="btn btn-sm bg-cyan"> </i>Total Harga</button> </th>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row m-2">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Aksi</th>
                        <th scope="col">Rincian</th>
                        <th scope="col">Volume</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d )
                    <tr class="text-uppercase">
                        <th scope="row">
                            <a href="{{ route('rab.trash',[$rab_id,$d->id]) }}" onclick="return confirm('Hapus Data');" class="btn btn-sm bg-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                            <button type="button" class="btn bg-teal btn-sm" data-toggle="modal" data-target="#modal{{ $d->id }}">
                                <i class="fas fa-edit" title="Edit"></i>
                            </button>
                            <!-- <a href="" class="btn btn-sm bg-teal">
                            </a> -->
                        </th>
                        <td>{{ $d->rincian }}</td>
                        <td>{{ $d->volume }}</td>
                        <td>{{ $d->satuan }}</td>
                        <td>{{'Rp. '. number_format($d->harga_satuan,2) }}</td>
                        <td>{{'Rp. '. number_format($d->total,2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container-fluid border border-dark">
                <div class="row">
                    <div class="col-10 text-bold">Total Upah</div>
                    <div class="col-2 text-bold  bg-gradient-secondary text-center"> {{'Rp. '.number_format( $data->sum('total'),2 )}} </div>
                </div>

            </div>
        </div>
    </div>
    @foreach ( $data as $d )


    <!-- Modal -->
    <div class="modal fade" id="modal{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <p align="center"> {{ $d->rincian }}</p>
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('rab.update',[$rab_id,$d->id]) }}" method="post">
                        @method('put')
                        @csrf
                        <input type="text" id="volume" name="volume" placeholder="Volume Pekerjaan" value="{{ old('volume', $d->volume) }} ">
                        <input type="text" id="satuan" name="satuan" placeholder="Satuan" value="{{ old('satuan', $d->satuan) }} ">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endsection
