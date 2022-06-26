@extends('component.template')
@section('konten')
<!-- Modal Edit -->
<div class="card p-5 m-2">
    <div class="card-header">
        Edit Data Tukang
    </div>
    <div class="card-body">
        <form action="/adm/tukang/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row">
                {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                <div class="col-6">
                    <div class="form-floating mb-3 mt-3">
                        <label for="nama">1. Nama </label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Tukang" name="nama" value=" {{ old('nama', $data->nama) }} ">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="alamat">2. Alamat </label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat Lengkap" name="alamat" value=" {{ old('alamat', $data->alamat) }}">
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="no_ktp">3. No KTP </label>
                        <input type="number" class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="No KTP ..." name="no_ktp" value="{{ old('no_ktp', $data->no_ktp) }}">
                        @error('no_ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="custom-file p-1">
                        <label for="foto_ktp" class="form-label">4. Foto KTP</label><br>
                        <input type="file" class="form-control @error('foto_ktp') is-invalid @enderror" id="foto_ktp" name="foto_ktp" value=" {{ old('foto_ktp', $data->foto_ktp) }}">
                        @error('foto_ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 mt-3" >
                        <label for="">6. Jenis Kelamin</label>
                        <select class="form-select form-control @error('jk') is-invalid @enderror" id="jk" name="jk" value=" {{ old('jk', $data->jk) }}" >
                            <option class=" active" disabled>Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="pembangunan">Perempuan</option>
                        </select>
                        @error('jk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="custom-file">
                        <label for="foto" class="form-label">Foto </label><br>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value=" {{ old('foto', $data->foto) }}">
                        @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-3 mt-3">
                        <label for="no_telp">7. No Telp. </label>
                        <input type="number" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="No Telpon aktif ..." name="no_telp" value="{{ old('no_telp', $data->no_telp) }}">
                        @error('no_telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="">8. Pendidikan</label>
                        <select class="form-select form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" value="{{ old('pendidikan', $data->pendidikan) }}">
                            <option class=" active" disabled>Pendidikan..</option>
                            <option value="mi">SD/MI</option>
                            <option value="mts">SMP/MTS</option>
                            <option value="ma">SMA/MA</option>
                            <option value="s1">S1</option>
                        </select>
                        @error('pendidikan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="keahlian">9. Keahlian </label>
                        <input type="text" class="form-control @error('keahlian') is-invalid @enderror" id="keahlian" placeholder="Keahlian .." name="keahlian" value=" {{ old('keahlian',$data->keahlian) }}">
                        @error('keahlian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="lain">10. Lain-Lain ..</label>
                        <textarea class="form-control @error('lain') is-invalid @enderror" placeholder="Tentang, keahlian, riwayat dll" id="lain" name="lain" style="height: 100px" value=" {{ old('lain', $data->lain) }}" >{{ old('lain', $data->lain) }}</textarea>
                        @error('lain')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- <div class="form-floating mb-3 mt-3">
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
                        <input type="password" class="form-control" id="password" placeholder="password" name="password" value="">
                    </div> --}}
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-2">Update Data</button>
        </form>
    </div>
</div>

<!-- /modal -->
@endsection
