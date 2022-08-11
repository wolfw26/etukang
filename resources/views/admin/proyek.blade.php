@extends('component.template')
@section('konten')
<div class="row">

</div>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-center">
                @if (session()->has('kosong'))
                <div class="row">
                    <div class="col-4">
                        <div class="alert alert-warning">
                            {{ session('kosong') }}
                            <a type="button" class="btn-close" data-dismiss="alert" aria-label="Close">x</a>
                        </div>
                    </div>
                </div>
                @endif
                <h1 class="m-0">
                    <h1>Halaman <strong style="color: brown;">Data Proyek All</strong></h1>

                </h1>
            </div><!-- /.col -->
            <div class="col-4">
                @if (session('tambah'))
                <div class="alert alert-success d-flex justify-content-between">
                    {{ session('tambah') }}
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
                    <li class="breadcrumb-item"><a href="http://" class="btn btn-outline-success" data-toggle="modal" data-target="#Tambah" id="TambahProyek">Tambah</a></li>
                    <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

@if ( $data && $data->count() > 0)

<div class="row">
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row g-0">
                @foreach ( $data as $d )
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
                    <div class="{{ $d->status ==  'DIKERJAKAN' ? 'card-lime card-outline elevation-3'  : ''  }} card bg-light d-flex flex-fill
                    ">
                        <div class="card-header border-bottom-0 text-center" style="color: #cc3300; font-weight:700">
                            {{ $d->nama_proyek }}
                        </div>
                        <div class="card-body pt-0 ">

                            <div class="text-center">
                                <img src="{{ asset('img/alat.jpg') }}" alt="user-avatar" class="img-rounded shadow img-fluid ">
                            </div>
                            {{-- <span class="lead text-center"><b class=" border-bottom" style="color: #cc3300; font-weight:700">{{ $d->nama_proyek }}</b></span> --}}
                            <div class="row m-3">
                                <p class="text-muted text-sm"><b>Pemilik: </b> {{ $d->client->nama }} </p><br>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: {{ $d->alamat }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telp #: {{ $d->client->no_telp }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-home"></i></span> Status:
                                        @if ( $d->status == 'SELESAI' )
                                        <div class="badge badge-success"> SELESAI</div>
                                    @else
                                        {{ $d->status }}
                                    @endif </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                @if ( $d->status == 'SELESAI')

                                <a  class="btn bg-success btn-sm">{{ $d->status }}</a>
                                @endif
                                {{-- <a href="" class="btn  " title="Tambah Pemakian Material">
                                    Material
                                </a> --}}
                                <a href="{{ route('proyek.rab',$d->id) }}" class="btn btn-sm bg-cyan" title="rab">
                                    RAB
                                </a>
                                <a href="#" class="btn btn-sm bg-teal" title="edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('detailProyek', $d->id) }}" class="btn btn-sm btn-primary">
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
            {{ $data->links() }}
        </div>
    </div>
    <!-- /card-solid -->
</div>
@else
<div class="row">
    <div class="col-6">
        <div class="alert alert-warning" role="alert">
            Data Belum DiTambah
        </div>
    </div>
</div>

@endif

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
                        <form action="/adm/proyek/" method="post">
                            @csrf
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama">1. Nama Proyek</label>
                                <input type="text" class="form-control" id="nama_proyek" placeholder="Nama Proyek" name="nama_proyek">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="alamat">2. Alamat Proyek</label>
                                <input type="text" class="form-control" id="alamat" placeholder="alamat Proyek" name="alamat">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="jenis_proyek">3. Jenis Proyek</label>
                                <select class="form-select form-control" id="jenis_proyek" name="jenis_proyek">
                                    <option class=" active" disabled>Jenis-Proyek</option>
                                    <option value="pembangunan">Pembangunan</option>
                                    <option value="renovasi">Renovasi</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="luas_tanah">4. Luas Tanah</label>
                                <input type="text" class="form-control" id="luas_tanah" placeholder="Luas Tanah Cth.24 (6 x 4) " name="luas_tanah">
                            </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mt-3">
                            <label for="panjang_tanah">5. Panjang Tanah</label>
                            <input type="text" class="form-control" id="panjang_tanah" placeholder="Panjang dari Bangunan" name="panjang_tanah">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="lebar_tanah">6. Lebar Tanah</label>
                            <input type="text" class="form-control" id="lebar_tanah" placeholder="Lebar dari bangunan" name="lebar_tanah">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="satuan">7. Satuan</label>
                            <input type="text" class="form-control" id="satuan" placeholder="M / m2/ m3" name="satuan">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="client">8. Client</label>
                            <select class="form-select form-control" id="client" name="client">
                                <option class=" active" disabled>Pilih Kepala Lapangan</option>
                                @foreach ($client as $d)
                                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="tukang">9. Tukang/ Kepala lapangan</label>
                            <select class="form-select form-control" id="tukang" name="tukang">
                                <option class=" active" disabled>Pilih Kepala Lapangan</option>
                                @foreach ($tukang as $d)
                                <option value="{{ $d->id }}">{{ $d->nama }}-{{ $d->jabatan->jabatan }}</option>
                                @endforeach
                            </select>
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


@endsection
