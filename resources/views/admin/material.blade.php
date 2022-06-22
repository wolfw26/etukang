@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Tukang</strong></h1>
<div class="container">
    <div class="alert bg-gradient-navy">
        <button class="btn btn-success" data-toggle="modal" data-target="#TambahMaterial">Tambah</button>
    </div>
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-header bg-green">Data Material</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Material</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d )
                            <tr>
                                <th scope="row">1</th>
                                <td> {{ $d->nama_material}}</td>
                                <td> {{ $d->satuan}}</td>
                                <td> {{ $d->harga_satuan}}</td>
                                <td> {{ $d->jumlah}}</td>
                                <td> {{ $d->jumlah_harga}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">Next</div>
            </div>

        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-header">Data Material</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"> Next</div>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="TambahMaterial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Material</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-8">
                        <div class="form-floating mb-3 mt-3">
                        <label for="material">1. Material </label>
                        <input type="text" class="form-control" id="material" placeholder="material" name="material">
                    </div>
                </div>
                    <div class="col-4">
                        <div class="form-floating mb-3 mt-3">
                            <label for="satuan">2. satuan </label>
                            <input type="text" class="form-control" id="satuan" placeholder="satuan " name="satuan">
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <label for="harga">3. Harga Satuan </label>
                    <input type="text" class="form-control" id="harga" placeholder="harga Tukang" name="harga">
                </div>
                <div class="form-floating mb-3 mt-3">
                    <label for="jumlah">4. Jumlah </label>
                    <input type="text" class="form-control" id="jumlah" placeholder="jumlah material" name="jumlah">
                </div>
                <div class="form-floating mb-3 mt-3">
                    <label for="total">5. Total Harga </label>
                    <input type="text" class="form-control" id="total" placeholder="total Harga" name="total">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Tambahkan</button>
            </div>
        </div>
    </div>
</div>
@endsection
