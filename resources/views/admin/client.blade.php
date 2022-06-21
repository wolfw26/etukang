{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Client</strong></h1>
<div class="row">
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="card-header mb-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahClient">
                        Tambah
                    </button>
                </div>
                <div class="row g-0">
                    @foreach ( $data as $d )
                    <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill" style="width: 30vh">
                            <div class="card-header border-bottom text-center" style="color: #cc3300; font-weight:700">
                                {{ $d->nama }}
                            </div>
                            <div class="card-body pt-0">
                                <div class="text-center">
                                    <img src="{{ asset('img/alat.jpg') }}" alt="user-avatar" class="img-circle shadow img-fluid " style="width: 120px; height:120px">
                                </div>
                                <div class="row mt-2">
                                    <div class="container-fluid">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"> <strong>Alamat:</strong> {{ $d->alamat }}</li>
                                            <li class="small"> <strong>Phone :</strong> {{ $d->no_telp }}</li>
                                            <li class="small"> <strong>Jenis-Kelamin :</strong> {{ $d->jk }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="/admin/client/show/{{ $d->id }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- /card -->
                </div>
                <!-- /row -->
            </div>
            <!-- /card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /card-solid -->
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="TambahClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header  bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Client</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 mt-3">
                            <label for="nama">1. Nama </label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Proyek" name="nama">
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <!-- Date -->
                                <div class="form-floating">
                                    <label>2. Date:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-3">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="nama" placeholder="Tempat Lahir" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="alamat">3. Alamat </label>
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="">4. Jenis Kelamin</label>
                            <select class="form-select form-control" id="" name="">
                                <option class=" active" disabled>Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="pembangunan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mt-3">
                            <label for="no_ktp">5. No KTP </label>
                            <input type="number" class="form-control" id="no_ktp" placeholder="No KTP ..." name="no_ktp">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">6. Choose file</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="no_telp">7. No Telp. </label>
                            <input type="number" class="form-control" id="no_telp" placeholder="No Telpon aktif ..." name="no_telp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->



@endsection
