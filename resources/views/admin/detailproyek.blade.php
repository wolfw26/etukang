{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<div class="container-fluid">
    <div class="card text-center">
        <div class="card-header bg-gradient-maroon">
            <h1>Halaman <strong class="text text-lightblue"> Detail</strong></h1>
        </div>
        <div class="card-body">
            <div class="row">
                <h5 class="card-title ">{{ $data->nama }}</h5>
            </div>

            <div class="row m-3">
                <div class="col-6 ">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>ket</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <th>nama</th>
                                    <td>{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Tukang</th>
                                    <td>{{ $data->nama_tukang }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Alamat</th>
                                    <td>{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Panjang Tanah</th>
                                    <td>{{ $data->panjang_tanah }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Lebar Tanah</th>
                                    <td>{{ $data->lebar_tanah }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Tipe Rumah</th>
                                    <td>{{ $data->tipe_rumah }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Jum. Kamar</th>
                                    <td>{{ $data->jumlah_kamar}}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Jum. Kmr Mandi</th>
                                    <td>{{ $data->jumlah_kamar_mandi }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Status</th>
                                    <td>{{ $data->status }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Doc</th>
                                    <td>{{ $data->doc }}</td>
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
