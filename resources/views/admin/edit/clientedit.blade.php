@extends('component.template')
@section('konten')
<div class="card">
    <div class="card-header">
        <h2> Update Data Client </h2>
    </div>
    <div class="card-body">
        <form action="{{ route('client.update',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3 mt-3">
                        <label for="nama">1. Nama </label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Proyek" name="nama" value=" {{ old('nama', $data->nama) }} " required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control mb-2" id="kalender" name="kalender" required data-toggle="datetimepicker" value=" {{ old('kalender', $data->tgl_lahir) }} ">
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value=" {{ old('tempat_lahir', $data->tempat_lahir) }} " required class="form-control border-right @error('tempat_lahir')
                                                    is-invalid
                                                    @enderror">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="alamat">3. Alamat </label>
                        <input value=" {{ old('alamat', $data->alamat) }} " type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat" required>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="jk">4. Jenis Kelamin</label>
                        <select class="form-select form-control" id="jk" name="jk" value=" {{ old('jk', $data->jk) }} ">
                            <option class=" active" disabled>Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="pembangunan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="no_telp">5. No Telp. </label>
                        <input value=" {{ old('no_telp', $data->no_telp) }} " type="text" class="form-control" id="no_telp" placeholder="No Telpon aktif ..." name="no_telp" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3 mt-3">
                        <label for="no_ktp">6. No KTP </label>
                        <input type="text" class="form-control" id="no_ktp" placeholder="No KTP ..." name="no_ktp" value=" {{ old('no_ktp', $data->no_ktp) }}" required>
                    </div>
                    <div class="custom-file">
                        <label for="image" class="form-label">7. Foto KTP</label><br>
                        <input type="file" class="fornm-floating" id="foto_ktp" name="foto_ktp">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class=" btn btn-success"> Update </button>
            </div>
        </form>
    </div>
</div>

@endsection
