@extends('component.template')
@section('konten')
<!-- Modal Edit -->
<div class="card p-5 m-2">
    <div class="card-header"></div>
    <div class="card-body">
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
                    <div class="custom-file p-1">
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
        </form>
    </div>
</div>

<!-- /modal -->
@endsection
