@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Biaya</strong></h1>
<div class="col-12">
    <div class="card p-3">
        <div class="row">
            <div class="container-fluid">
                <div class="card-haeder text-center border-bottom border-dark border-bottom-3">
                    <h2 style="font-family:Arial, Helvetica, sans-serif  ;"> Biaya Kerja</h2>
                </div>
            </div>

        </div>
        <div class="row">

            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Rincian Pekerjaan</th>
                        <th> Volume/satuan</th>
                        <th>Harga Satuan</th>
                        <th>Total</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1.</th>
                        <td>Pembangunan</td>
                        <td>M2</td>
                        <td>10.000.000</td>
                        <td>5</td>
                        <th>50.000.000</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>
<div class="row"></div>
@endsection
