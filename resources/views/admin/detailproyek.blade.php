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
                <h5 class="card-title ">Tukang : {{ $tukang }}</h5>
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
            </div>



        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</div>
@endsection
