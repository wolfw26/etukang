@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="card text-center p-2 shadow-md shadow-2xl mt-3">
        <div class="card-header p-0 bg-gradient-maroon">
            <h1>Halaman <strong class="text text-lightblue"> Detail</strong></h1>
        </div>
        <div class="row p-2 border-bottom">
            <div class="col-3 border border-info elevation-3" style="padding: 1px ;">
                {{-- <!-- @if ($d->image)
                <div class="container-fluid rounded">
                    <img style="height: 200px; width: 100%; " src="{{ asset( $d->image) }}" class="img-fluid ">
                </div>
                @else --> --}}
                <i class="fas fa-user fa-5x mt-5"></i>
                {{-- <!-- @endif --> --}}
                {{-- <!-- <div class=" row-cols-1">
                    <img src=" {{ asset($client->foto_ktp) }} " alt="" class="img-rounded shadow-2xl img-thumbnail">
                </div> --> --}}
            </div>
            <div class="col-7">
                <div class="col-3 text-left ">
                    <h5 class=" text-bold ">Pemilik : <strong> <a href="#">{{ $client->nama}}</a> </strong></h5><br>
                    @if ( $tukang && $tukang->count() > 0)

                    <h5 class=" text-mute ">Tukang : <strong> <a href="{{ route('pekerja.detail',$tukang->id) }}"> {{ $tukang->nama }} </a></strong></h5>
                    @else
                    <div class="badge badge-warning p-1 shadow-sm">
                        <strong>Belum ada Tukang</strong>
                    </div>
                    <form action="{{ route('proyek.tambahTukang',$proyek->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <select name="tukang" id="tukang" class="form-control form-control-sm m-1">
                                <option selected disabled> -- Pilih Tukang --</option>
                                @foreach ( $pekerja as $t )
                                <option value="{{ $t->id }}">{{ $t->nama }} - {{ $t->jabatan->jabatan }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-sm btn-success "><i class="fas fa-plus"></i></button>
                        </div>
                    </form>
                    @endif

                </div>
                <div class="col-5 text-left">
                    Alamat : {{ $proyek->alamat }} <br>
                    Luas Tanah : {{ $proyek->luas_tanah }} <br>
                    Panjang Rumah : {{ $proyek->luas_tanah }} {{ $proyek->satuan }} <br>
                    Lebar Rumah : {{ $proyek->luas_tanah }} {{ $proyek->satuan }}<br>
                </div>
            </div>
            <div class="col-3">
            </div>
            <hr>
        </div>
        <div class="row">
            <col-4>
                <div class="col text-success ">
                    <h3 class=" text-bold text-capitalize"> {{ $proyek->status }} </h3>
                </div>
            </col-4>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            @if ($materialout && $materialout->count() > 0)
            <div class="card card-outline card-navy">
                <div class="card-header text-center ">
                    <span class=" text-md font-mono font-weight-bold "> Data Material </span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kode</th>
                                <th>Nama Material</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $materialout as $mo )
                            <tr>
                                <td>
                                    <div class="badge badge-secondary">{{ date('d-M-Y',strtotime($mo->tanggal)) }}</div>
                                </td>
                                <td>{{ $mo->kode_material }}</td>
                                <td> <strong>{{ $mo->nama_material }}</strong> </td>
                                <td class="text-right">{{ $mo->jumlah }}</td>
                                <td>
                                    <div class="badge badge-pill badge-success">{{ $mo->satuan }}</div>
                                </td>
                                <td>{{ 'Rp. '. number_format($mo->harga_satuan,2) }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
        <div class="col-6">
            @if ( $rab && $rab->count() > 0)
            <div class="card card-outline card-navy">
                <div class="card-header text-center">RAB</div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Rincian</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $rab as $d )
                            @foreach ( $d->datarab as $data )
                            <tr>
                                <td>{{ $data->rincian }}</td>
                                <td>{{ $data->volume }}</td>
                                <td>{{ $data->satuan }}</td>
                                <td>{{ $data->harga_satuan }}</td>
                                <td>{{ $data->total }}</td>
                            </tr>
                            @endforeach

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="card-footer text-muted">
        {{ date('d-M-Y') }}
    </div>
</div>
</div>
@endsection
