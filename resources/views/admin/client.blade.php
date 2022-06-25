{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<div class="row">
    <div class="col-10">
        <h1>Halaman <strong style="color: brown;">Client</strong></h1>
    </div>
    <div class="col-2">
        @if (session('ditambah'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Berhasil</h5>
            {{ session('ditambah') }}
        </div>
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
                                <div class=" d-sm-flex justify-content-center ">
                                    <a href="{{ url()->previous() }}" class="btn-sm  m-2 p-1"> <i class=" fas fa-arrow-left"> </i> </a> <br>
                                    <form action="/adm/client">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" name="cari" value=" {{ request('cari') }} ">
                                            <button class="btn btn-outline-warning bg-navy" type="submit" id="button-addon2">cari</button>
                                        </div>
                                    </form>
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
                            <div class="card-header border-bottom text-center" style="color: navy; font-weight:700">
                                {{ $d->nama }}
                            </div>
                            <div class="card-body pt-0">
                                <div class="text-center">
                                    <img src="{{ asset( $d->foto_ktp) }}" alt="user-avatar" class="img-circle shadow img-fluid " style="width: 120px; height:120px">
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
                                    <a href=" {{ route('client') }}/d/{{ $d->id }} " onclick="return confirm('Hapus Data   {{ $d->nama }} ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href=" {{ Route('client.edit',$d->id) }} " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit" ></i>
                                    </a>
                                    <a href="/adm/client/{{ $d->id }}" class="btn btn-sm btn-primary">
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
                        <li class="page-item active"><a class="page-link bg-navy" href="#">1</a></li>
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
                <form action="{{ url('adm/client') }}" method="post" enctype="multipart/form-data">
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
