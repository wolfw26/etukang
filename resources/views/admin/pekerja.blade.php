{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">Pekerja</strong></h1>
<div class="row">
    <div class="col-4">
        @if (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil') }}
    </div>
@endif
    </div>
</div>
<div class="card m-2">
    <div class="card-header">
        <div class="row">
            <div class="container-fluid p-0  d-flex justify-content-between">
                <div class="col-7"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahPekerja">
                        Tambah
                    </button> <br></div>
                <div class="col-5 d-sm-flex justify-content-center ">
                    <a href="{{ url()->previous() }}" class="btn-sm  m-2 p-1"> <i class=" fas fa-arrow-left"> </i> </a> <br>
                    <form action="/adm/pekerja">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" name="cari" value=" {{ request('cari') }} ">
                            <button class="btn btn-outline-warning bg-navy" type="submit" id="button-addon2">cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div> -->
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th scope="col">
                        Nama pekerja
                    </th>
                    <th scope="col">
                        Jenis kelamin
                    </th>
                    <th scope="col">
                        alamat
                    </th>
                    <th scope="col">
                        Tempat,tgl_lahir
                    </th>
                    <th scope="col" class="text-center">
                        nope
                    </th>
                    <th scope="col">
                        Pendidikan
                    </th>
                    <th scope="col">
                        foto_ktp
                    </th>
                    <th scope="col">
                        image
                    </th>
                    <th scope="col">
                        aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $data as $d )
                <tr>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->jenis_kelamin }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>{{ $d->tempat_lahir }},{{ $d->tgl_lahir }}</td>
                    <td>{{ $d->nope}}</td>
                    <td>{{ $d->pendidikan}}</td>
                    <td>

                        @if ($d->fotoKtp)
                        <img src="{{ asset('storage/') }}" alt="">
                        @else

                        @endif
                    </td>
                    <td>{{ $d->image}}</td>
                    <td class=" d-inline-flex justify-content-between">
                        <a href=" {{ route('client',$d->id) }}" onclick="return confirm('Hapus Data   {{ $d->nama }} ');" class="btn btn-sm" title="hapus">
                            <i class="fas fa-trash text-danger"></i>
                        </a>
                        <a href="client/{{ $d->id }}/edit" type="button" class="btn btn-sm">
                            <i class="fas fa-edit text-teal" title="Edit"></i>
                        </a>
                        <a href="/adm/client/{{ $d->id }}" class="btn btn-sm" title="detail">
                            <i class="fas fa-user text-primary"></i>
                        </a>
                    </td>
                </tr>
                @endforeach

        </table>
    </div>
    {{ $data->links() }}
</div>


<!-- Modal -->
<div class="modal fade" id="TambahPekerja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pekerja</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('pekerja.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama">Nama </label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Tukang" name="nama">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="alamat">Alamat </label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="nope">Telp. Aktif</label>
                                <input type="number" class="form-control" id="nope" placeholder="No.Telp Aktif" name="nope">
                            </div>
                            <div class="mb-3">
                                <label for="foto_ktp"> Foto KTP</label>
                                <input type="file" class="form-control" id="fotoKtp" name="fotoKtp" onchange="previewKtp()">
                                <img class="ktp-preview img-fluid mt-3 col-sm-5 rounded" id="ktp-preview">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3 mt-3">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="form-select form-control" id="jk" name="jk">
                                    <option class=" active" disabled>Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="pembangunan">Perempuan</option>
                                </select>
                            </div>
                            <label for="tempat">Tempat,Tanggal Lahir</label>
                            <div class="input-group">
                                <input name="tempat" id="tempat" type="text" aria-label="tempat" class="form-control">
                                <input name="tgl_lahir" id="tgl_lahir" type="date" aria-label="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="pendidikan">Pendidikan </label>
                                <input type="text" class="form-control" id="pendidikan" placeholder="pendidikan terakhir" name="pendidikan">
                            </div>
                            <div class="mb-3">
                                <label for="foto"> Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" onchange="previewImage()">
                                <img class="img-preview img-fluid mt-3 col-md-5 rounded" id="img-preview">
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

<script>
    function previewImage() {
        const image = document.querySelector('#foto');
        const imgPreview = document.querySelector('#img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function previewKtp() {
        const image = document.querySelector('#fotoKtp');
        const imgPreview = document.querySelector('#ktp-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
