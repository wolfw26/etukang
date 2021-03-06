{{-- @dd($data) --}}
@extends('component.template')
@section('konten')<div class="row">

</div>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-center">
                <h1 class="m-0">
                    <h1>Halaman <strong style="color: brown;">Renovasi</strong></h1>
                </h1>
            </div><!-- /.col -->
            <div class="col-4">
                @if (session('sukses'))
                <div class="alert alert-success d-flex justify-content-between">
                    {{ session('sukses') }}
                    <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                </div>
                @elseif (session('hapus'))
                <div class="alert alert-warning d-flex justify-content-between">
                    {{ session('hapus') }}
                    <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                </div>
                @endif
            </div>
            <div class="col-sm-2">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="http://" class="btn btn-outline-success" data-toggle="modal" data-target="#Tambah" id="TambahRenovasi">Tambah</a></li>
                    <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<div class="row">
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row g-0">
                @foreach ( $data as $d )
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header border-bottom-0 text-center" style="color: #cc3300; font-weight:700">
                            {{ $d->nama_proyek }}
                        </div>
                        <div class="card-body pt-0">

                            <div class="text-center">
                                <img src="{{ asset('img/alat.jpg') }}" alt="user-avatar" class="img-rounded shadow img-fluid ">
                            </div>
                            {{-- <span class="lead text-center"><b class=" border-bottom" style="color: #cc3300; font-weight:700">{{ $d->nama_proyek }}</b></span> --}}
                            <div class="row m-3">
                                <p class="text-muted text-sm"><b>Pemilik: </b> {{ $d->client->nama }} </p><br>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: {{ $d->alamat }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                </ul>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal" title="edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/adm/proyek/{{ $d->id }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> Detail
                                </a>
                                <a href="{{ route('proyek')}}/del/{{ $d->id }}" class="btn btn-sm bg-danger" onclick="return confirm('Hapus Data Proyek  {{ $d->nama_proyek }} ');" title="hapus">
                                    <i class="fas fa-trash"></i>
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

<!-- Modal -->
<div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header  bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Proyek</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 mt-3">
                            <label for="nama">Nama Proyek</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Proyek" name="nama">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="alamat">Alamat Proyek</label>
                            <input type="text" class="form-control" id="alamat" placeholder="alamat Proyek" name="alamat">
                        </div>
                        <input type="hidden" name="jenis_proyek" id="jenis_proyek" value="renovasi">
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mt-3">
                            <label for="panjang_tanah">Panjang</label>
                            <input type="text" class="form-control" id="panjang_tanah" placeholder="Panjang dari Bangunan" name="panjang_tanah">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="lebar_tanah">Lebar</label>
                            <input type="text" class="form-control" id="lebar_tanah" placeholder="Lebar dari bangunan" name="lebar_tanah">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" id="satuan" placeholder="M / m2/ m3" name="satuan">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="tukang">Tukang/ Kepala lapangan</label>
                            <select class="form-select form-control" id="tukang" name="tukang">
                                <option class=" active" disabled>Pilih Kepala Lapangan</option>
                                <option value="pembangunan">Pak Iqbal</option>
                                <option value="renovasi">Roni</option>
                            </select>
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
