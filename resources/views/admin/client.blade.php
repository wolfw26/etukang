{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<div class="row">
    <div class="col-7">
        <h1>Halaman <strong style="color: brown;">Client</strong></h1>
    </div>
    <div class="col-4">
        @if (session('ditambah'))
        <div class="alert alert-success d-flex justify-content-between">
            {{ session('ditambah') }}
            <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="card-header mb-3">
                    <div class="row">
                        <div class="container-fluid p-1  d-flex justify-content-between">
                            <div class="col-7"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahClient">
                                    Tambah
                                </button> <br></div>
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-success" type="button" id="button-addon2">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahClient">
                        Tambah
                    </button> -->
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
                                    <a href=" {{ route('client') }}/del/{{ $d->id }} " class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
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
                <form action="{{ url('admin/client') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama">1. Nama </label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Proyek" name="nama" required>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="date" class="form-control mb-2" id="kalender" name="kalender" required data-toggle="datetimepicker">
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required class="form-control border-right @error('tempat_lahir')
                                                    is-invalid
                                                    @enderror">
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="alamat">3. Alamat </label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat" required>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="jk">4. Jenis Kelamin</label>
                                <select class="form-select form-control" id="jk" name="jk">
                                    <option class=" active" disabled>Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="pembangunan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="no_telp">5. No Telp. </label>
                                <input type="number" class="form-control" id="no_telp" placeholder="No Telpon aktif ..." name="no_telp" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3 mt-3">
                                <label for="no_ktp">6. No KTP </label>
                                <input type="number" class="form-control" id="no_ktp" placeholder="No KTP ..." name="no_ktp" required>
                            </div>
                            <div class="custom-file">
                                <label for="image" class="form-label">7. Foto KTP</label><br>
                                <input type="file" class="fornm-floating" id="foto_ktp" name="foto_ktp">
                            </div>

                            <div class="form-floating mb-3 mt-3">
                                <label for="name">8. username </label>
                                <input type="text" class="form-control" id="name" placeholder="username ..." name="name" required>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="email">9. Email </label>
                                <input type="text" class="form-control @error('email')
                                    is-invalid
                                @enderror " id="email" placeholder="Email@mail.com ..." name="email" value=" {{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="no_telp">10. password </label>
                                <input type="text" class="form-control" id="password" placeholder="Password akun" name="password" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->



@endsection
