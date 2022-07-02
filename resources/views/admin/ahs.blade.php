{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<h1>Halaman <strong style="color: brown;">AHS</strong></h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-green"></div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="w-25 p-3">Aksi</th>
                                                <th scope="col" class="w-25 p-3">Kode Ahs</th>
                                                <th scope="col">Nama AHS</th>
                                                <th scope="col">Biaya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d )
                                            <tr>
                                                <th scope="col">
                                                    <a href=" {{ route('ahs') }}/{{ $d->id }}/d " onclick="return confirm('Hapus Data   {{ $d->nama_material }} ');" class="btn btn-sm bg-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href=" {{ Route('ahs.edit',$d->id) }} " class="btn btn-sm bg-teal">
                                                        <i class="fas fa-edit" title="Edit"></i>
                                                    </a>
                                                    <a href="{{ route('ahs.detail', $d->id)}}" class="btn btn-sm bg-success">
                                                        <i class="fas fa-eye" title="view"></i>
                                                    </a>
                                                </th>
                                                <td> {{ $d->kode_ahs}}</td>
                                                <td class=" text-bold"> {{ $d->nama_ahs}}</td>
                                                <td> {{ number_format($d->total,2)  }} </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <button id="form_button">Klik menampilkan satu </button>
        <button id="form_button_2">Klik menampilkan dua </button>
        <div id="satu" class="active">
            SAtu
        </div>
        <div id="dua" class="">
            dua
        </div> --}}
        <div class="col-4">
            <div class="card">
                <div class="row m-1">
                    <div class="col-5 p-2">
                        <button id="form_button">Tambah Baru</button>
                    </div>
                </div>
                <div class="card-body text-center text-bold">Tambah AHS</div>
                <div class="card-body text-center" id="satu">
                    <form action="{{ route('ahs.add') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="kode_ahs" id="kode_ahs" placeholder="Kode Ahs">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="nama_ahs" id="nama_ahs" placeholder="Nama AHs"><br>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="kategori" id="kategori" placeholder="Kategori"><br>
                        </div>
                        <button type="submit">Buat</button>
                    </form>
                </div>
                <div class="form-floating mb-3 mt-3 active" id="dua">
                    <label for="ahs">Pilih AHS</label>
                    <select class="form-select form-control" id="ahs" name="ahs" required>
                        <option class=" active" disabled>AHS</option>
                        @foreach ( $data as $p )
                        <option value="{{ $p->id }}">{{ $p->kode_ahs }}-{{ $p->nama_ahs }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="row p-2">
                    <div class="col-12">
                        @if (session('sukses'))
                        <div class="alert alert-success d-flex justify-content-between">
                            {{ session('sukses') }}
                            <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                        </div>
                        @endif
                    </div>
                    <div class="card-body p-2">
                        <form action="{{ route('ahs.dataahs') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3 mt-3">
                                <label for="ahs">Pilih AHS</label>
                                <select class="form-select form-control" id="ahs" name="ahs" required>
                                    <option class=" active" disabled>AHS</option>
                                    @foreach ( $data as $p )
                                    <option value="{{ $p->id }}">{{ $p->kode_ahs }}-{{ $p->nama_ahs }}</option>
                                    @endforeach
                                </select>
                            </div> <br>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3 mt-3">
                                            <label for="nama_material">Keterangan</label>
                                            <input type="text" class="form-control" id="nama_material" placeholder="Rincian" name="nama_material" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3 mt-3">
                                            <label for="satuan">Satuan</label>
                                            <input type="text" class="form-control" id="satuan" placeholder="satuan " name="satuan" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="volume">Koefisien</label>
                                <input type="float" class="form-control" id="volume" placeholder="Koefisien" name="volume" required>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="harga_satuan">Harga Satuan</label>
                                <input type="integer" class="form-control" id="harga_satuan" placeholder="Harga Satuan .." name="harga_satuan" required>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="jenis_proyek">Jenis Data</label>
                                <select class="form-select form-control" id="jenis_proyek" name="jenis_proyek" required>
                                    <option class=" active" disabled>Jenis-Data</option>
                                    <option value="upah">Upah</option>
                                    <option value="bahan">Bahan</option>
                                    <option value="alat">Alat</option>
                                </select>
                            </div>
                            <div class="card-footer">
                                <button type="submit">Tambah</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .active{
            display:none;
        }
    </style>
<script>
    var satu = document.getElementById("satu");
    var dua = document.getElementById("dua");

    var button = document.getElementById('form_button');
    var button_2 = document.getElementById('form_button_2');

    button.addEventListener(('click'), ()=>{

        satu.classList.toggle('active');

    })
    button.addEventListener(('click'), ()=>{

        dua.classList.toggle('active');

    })
</script>

    @endsection
    {{-- <input type="text" placeholder="rincian_pekerjaan" name="rincian_pekerjaan" id="rincian_pekerjaan">
                        <input type="text" placeholder="satuan" name="satuan" id="satuan">
                        <select name="kategori" id="kategori">
                            <option value="upah">Upah</option>
                            <option value="bahan">Bahan</option>
                            <option value="alat">Alat</option>
                        </select>
                        <input type="int" placeholder="volume" name="volume" id="volume"> --}}
                        {{-- <script>
                            $(document).ready(function(){
                                $('.row #show').click(function(event){
                                    $('#pesan').show();
                                });
                                $('.row #hide').click(function(event){
                                    $('#pesan').hide();
                                });
                            });
                        </script> --}}
