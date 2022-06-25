@extends('component.template')
@section('konten')
<div class="row">
    <div class="col-4">
        @if (session('sukses'))
        <div class="alert alert-success d-flex justify-content-between">
            {{ session('sukses') }}
            <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
        </div>
        @endif
    </div>

</div>
</div>
<h1>Halaman <strong style="color: brown;">Tukang</strong></h1>
<div class="card m-2">
    <div class="card-header">
        <div class="row">
            <div class="container-fluid p-1  d-flex justify-content-between">
                <div class="col-7"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahTukang">
                        Tambah
                    </button> <br></div>
                <div class="col-5">
                    <form action="/adm/tukang/">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="cari" value=" {{ request('cari') }} " id="cari">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
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
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 15%">
                        Nama Tukang
                    </th>
                    <th style="width: 20%">
                        Alamat
                    </th>
                    <th style="width: 15%">
                        No. Telp
                    </th>
                    <th style="width: 10%" class="text-center">
                        Foto KTP
                    </th>
                    <th style="width: 20%">
                        Jenis Kelamin
                    </th>
                    <th style="width: 20%">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $data as $d )
                <tr class="text-center">
                    <td>
                        #
                    </td>
                    <td>
                        <strong>{{ $d->nama }}</strong>
                    </td>
                    <td class="project_progress">
                        <p>{{ $d->alamat }}</p>
                    </td>
                    <td class="project-state">
                        <span>{{ $d->no_telp }} </span>
                    </td>
                    <td class="project-state">
                        <img src="{{ asset( $d->foto_ktp) }}" alt="user-avatar" class="img-circle shadow img-fluid " style="width: 300px; height:100px">
                    </td>
                    <td class="project-state">
                        <span>{{ $d->jk }} </span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="badge badge-primary btn-sm" href="/adm/tukang/{{ $d->id }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="badge badge-info btn-sm" href="/adm/tukang/ {{ $d->id }}/edit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="badge badge-danger btn-md" onclick="return confirm('Hapus Data Tukang  {{ $d->nama }} ');" href=" {{ route('tukang') }}/del/{{$d->id}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach

        </table>
    </div>
    {{ $data->links() }}
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="TambahTukang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header  bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Client</h5>
            </div>
            <div class="modal-body">
                <form action="/adm/tukang" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama">1. Nama </label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Tukang" name="nama" value=" {{ old('nama') }} ">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="alamat">2. Alamat </label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat" value=" {{ old('alamat') }}">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="no_ktp">3. No KTP </label>
                                <input type="number" class="form-control" id="no_ktp" placeholder="No KTP ..." name="no_ktp" value=" {{ old('no_ktp') }}">
                            </div>
                            <div class="custom-file">
                                <label for="image" class="form-label">4. Foto KTP</label><br>
                                <input type="file" class="form-control" id="image" name="image" value=" {{ old('image') }}">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="">6. Jenis Kelamin</label>
                                <select class="form-select form-control" id="jk" name="jk">
                                    <option class=" active" disabled>Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="pembangunan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="no_telp">7. No Telp. </label>
                                <input type="number" class="form-control" id="no_telp" placeholder="No Telpon aktif ..." name="no_telp" value=" {{ old('no_telp') }}">
                            </div>
                            <div class="custom-file">
                                <label for="foto" class="form-label">Foto </label><br>
                                <input type="file" class="form-control" id="foto" name="foto" value=" {{ old('foto') }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3 mt-3">
                                <label for="">8. Pendidikan</label>
                                <select class="form-select form-control" id="pendidikan" name="pendidikan">
                                    <option class=" active" disabled>Pendidikan..</option>
                                    <option value="mi">SD/MI</option>
                                    <option value="mts">SMP/MTS</option>
                                    <option value="ma">SMA/MA</option>
                                    <option value="s1">S1</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="keahlian">9. Keahlian </label>
                                <input type="text" class="form-control" id="keahlian" placeholder="Keahlian .." name="keahlian" value=" {{ old('keahlian') }}">
                            </div>
                            <div class="form-floating">
                                <label for="lain">10. Lain-Lain ..</label>
                                <textarea class="form-control" placeholder="Tentang, keahlian, riwayat dll" id="lain" name="lain" style="height: 100px"></textarea>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="username"> Username </label>
                                <input type="text" class="form-control" id="username" placeholder="username .." name="username" value=" {{ old('username') }}">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="email"> E-Mail </label>
                                <input type="text" class="form-control @error('email')
                                is-invalid
                                @enderror " id="email" placeholder="email .." name="email" value=" {{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="password">Password </label>
                                <input type="password" class="form-control" id="password" placeholder="password .." name="password" value=" {{ old('password') }}">
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
