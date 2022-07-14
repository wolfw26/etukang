{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="card text-center p-2">
        <div class="card-header bg-gradient-maroon">
            <h1>Halaman <strong class="text text-lightblue"> Detail</strong></h1>
        </div>
        <div class="row p-2 border-bottom">
            <div class="col-3">
                <div class=" row-cols-1">
                    <img src=" {{ asset($client->foto_ktp) }} " alt="" class="img-rounded shadow-2xl img-thumbnail">
                </div>
            </div>
            <div class="col-7">
                <div class="col-3 text-left ">
                    <h5 class=" text-bold ">Pemilik : <strong> <a href="#">{{ $client->nama}}</a> </strong></h5><br>
                    <h5 class=" text-mute ">Tukang : <strong> <a href="/adm/tukang/">{{ $tukang->nama}}</a></strong></h5>
                </div>
                <div class="col-5 text-left">
                    Alamat : {{ $proyek->alamat }} <br>
                    Luas Tanah : {{ $proyek->luas_tanah }} <br>
                    Panjang Rumah : {{ $proyek->luas_tanah }} {{ $proyek->satuan }} <br>
                    Lebar Rumah : {{ $proyek->luas_tanah }} {{ $proyek->satuan }}<br>
                </div>

            </div>
            <div class="col-3">
                <div class="col text-success ">
                    <h3 class=" text-bold text-capitalize"> {{ $proyek->status }} </h3>
                </div>
            </div>



            <hr>
        </div>
        <div class="row m-3">
            <div class="col-6 ">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class=" bg-gradient-maroon">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                                <th>Panjang</th>
                                <th>Lebar</th>
                                <th>Satuan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d )
                            <tr>
                                <td></td>
                                <th> {{ $d->nama_data }} </th>
                                <td>{{ $d->jumlah }}</td>
                                <td>{{ $d->panjang }}</td>
                                <td>{{ $d->lebar }}</td>
                                <td>{{ $d->satuan }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6 ">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class=" bg-gradient-maroon">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                                <th>Panjang</th>
                                <th>Lebar</th>
                                <th>Satuan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
</div>
</div>
@endsection
