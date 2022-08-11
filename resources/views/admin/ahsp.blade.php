{{-- @dd($data) --}}
@extends('component.template')
@section('konten')
<div class="row">
    <h1>Halaman <strong style="color: brown;">AHS</strong></h1>
    <div class="col-8 d-sm-flex justify-content-center mt-2">
        <a href="{{ url()->previous() }}" class="btn-sm  m-2 p-1"> <i class=" fas fa-arrow-left"> </i> </a> <br>
        <form action="/adm/ahsp">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" name="cari" value=" {{ request('cari') }} ">
                <button class="btn btn-outline-warning bg-navy" type="submit" id="button-addon2">cari</button>
            </div>
        </form>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-green"></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="w-25 p-3">Aksi</th>
                                        <th scope="col">Kode Ahs</th>
                                        <th scope="col" class="w-25 p-3">Nama AHS</th>
                                        <th scope="col">Satuan</th>
                                        <th scope="col">Overhead</th>
                                        <th scope="col">Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d )
                                    <tr>
                                        <th scope="col">
                                            <a href=" {{ route('ahsp') }}/{{ $d->id }}/d " onclick="return confirm('Hapus Data   {{ $d->nama_material }} ');" class="btn btn-sm bg-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#editAhs{{ $d->id }}">
                                                <i class="fas fa-edit" title="Edit"></i>
                                            </a>
                                            <a href="{{ route('ahsp.detail', $d->id)}}" class="btn btn-sm bg-success">
                                                <i class="fas fa-eye" title="view"></i>
                                            </a>
                                        </th>
                                        <td> {{ $d->kode_ahs}}</td>
                                        <td class=" text-bold"> {{ $d->nama_ahs}}</td>
                                        <td>
                                            <div class="badge badge-warning"> {{ $d->satuan }} </div>
                                        </td>
                                        <td> {{ $d->profit . '%'  }} </td>
                                        <td> {{ number_format($d->total,2)  }} </td>
                                    </tr>
                                    <!-- Modal -->
                                    <form action=" {{ Route('ahsp.edit',$d->id) }} " method="POST">
                                        @csrf
                                        <div class="modal fade" id="editAhs{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Data {{ $d->id }} </h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="kode" class="form-label">Kode AHS</label>
                                                            <input value=" {{  $d->kode_ahs }} " type="text" class="form-control" name="kode" id="kode" placeholder="Kode AHS">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama AHS</label>
                                                            <input value="{{ $d->nama_ahs }}" type="text" class="form-control" name="nama" id="nama" placeholder="nama AHS">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kategori" class="form-label">kategori AHS</label>
                                                            <select valuu="{{ $d->kategori }}" name="kategori" id="kategori" class="form-control form-control-sm mb-3">
                                                                <option value="Pekerjaan Persiapan">Pekerjaan Persiapan</option>
                                                                <option value="Pekerjaan Tanah">Pekerjaan Tanah</option>
                                                                <option value="Pekerjaan Pondasi">Pekerjaan Pondasi</option>
                                                                <option value="Pekerjaan Beton">Pekerjaan Beton</option>
                                                                <option value="Pekerjaan Pasangan Dinding">Pekerjaan Pasangan Dinding</option>
                                                                <option value="Pekerjaan Atap">Pekerjaan Atap</option>
                                                                <option value="Pekerjaan langit-Langit(Plapon)">Pekerjaan langit-Langit(Plapon)</option>
                                                                <option value="Pekerjaan Lantai">Pekerjaan Lantai</option>
                                                                <option value="Pekerjaan Kayu">Pekerjaan Kayu</option>
                                                                <option value="Pekerjaan Kaca dan Kunci">Pekerjaan Kaca dan Kunci)</option>
                                                                <option value="Pekerjaan Sanitasi">Pekerjaan Sanitasi</option>
                                                                <option value="Pekerjaan Instalasi">Pekerjaan Instalasi</option>
                                                                <option value="Pekerjaan Finishin dan Pengecatan">Pekerjaan Finishin dan Pengecatan</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="satuan" class="form-label">satuan AHS</label>
                                                            <input value="{{ $d->satuan }}" type="text" class="form-control" name="satuan" id="satuan" placeholder="satuan AHS">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <input value="{{ $d->profit }}" type="text" name="profit" id="profit" class="form-control" placeholder="Profit / Overhead" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header bg-green"></div>
                <div class="card-body text-center text-bold">Tambah AHS</div>
                <div class="card-body text-center" id="satu">
                    <form action="{{ route('ahsp.add') }}" method="POST">
                        @csrf
                        <div class=" mb-3">
                            <input class="form-control form-control-sm" type="text" name="kode_ahs" id="kode_ahs" placeholder="Kode Ahs">
                        </div>
                        <div class=" mb-3">
                            <input class="form-control form-control-sm" type="text" name="nama_ahs" id="nama_ahs" placeholder="Nama AHs"><br>
                        </div>
                        <div class=" mb-3">
                            <input class="form-control form-control-sm" type="text" name="satuan" id="satuan" placeholder="Satuan"><br>
                        </div>
                        <div class="mb-3">
                            <select name="kategori" id="kategori" class="form-control form-control-sm mb-3">
                                <option value="Pekerjaan Persiapan">Pekerjaan Persiapan</option>
                                <option value="Pekerjaan Tanah">Pekerjaan Tanah</option>
                                <option value="Pekerjaan Pondasi">Pekerjaan Pondasi</option>
                                <option value="Pekerjaan Beton">Pekerjaan Beton</option>
                                <option value="Pekerjaan Pasangan Dinding">Pekerjaan Pasangan Dinding</option>
                                <option value="Pekerjaan Atap">Pekerjaan Atap</option>
                                <option value="Pekerjaan langit-Langit(Plapon)">Pekerjaan langit-Langit(Plapon)</option>
                                <option value="Pekerjaan Lantai">Pekerjaan Lantai</option>
                                <option value="Pekerjaan Kayu">Pekerjaan Kayu</option>
                                <option value="Pekerjaan Kaca dan Kunci">Pekerjaan Kaca dan Kunci)</option>
                                <option value="Pekerjaan Sanitasi">Pekerjaan Sanitasi</option>
                                <option value="Pekerjaan Instalasi">Pekerjaan Instalasi</option>
                                <option value="Pekerjaan Finishin dan Pengecatan">Pekerjaan Finishin dan Pengecatan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="profit" id="profit" placeholder="Profit" class="form-control form-control-sm "><br>
                        </div>
                        <button type="submit">Buat</button>
                    </form>
                </div>
            </div>
            <!-- <div class="form-floating mb-3 mt-3 active" id="dua">
                    <label for="ahs">Pilih AHS</label>
                    <form action="{{ route('ahsp.add') }}" method="POST">
                        @csrf
                        <select class="form-select form-control" id="ahs" name="ahs" required>
                            <option class=" active" disabled>AHS</option>
                            @foreach ( $data as $p )
                            <option value="{{ $p->id }}">{{ $p->kode_ahs }}-{{ $p->nama_ahs }}</option>
                            @endforeach
                        </select>
                        <button class=" btn btn-outline-success" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
            <br> -->
            <!-- <div class="card">
                <div class="card-header bg-green"></div>
                <div class="row p-2">
                    <div class="col-12">
                        @if (session('sukses'))
                        <div class="alert alert-success d-flex justify-content-between">
                            {{ session('sukses') }}
                            <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                        </div>
                        @endif
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('ahsp.dataahsp') }}" method="post">
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
            </div> -->
            <!-- </div> -->
        </div>
        <style>
            /* .active {
            display: none;
        } */
        </style>
        <script>
            // var satu = document.getElementById("satu");
            // var dua = document.getElementById("dua");

            // var button = document.getElementById('form_button');
            // var button_2 = document.getElementById('form_button_2');

            // button.addEventListener(('click'), () => {

            //     satu.classList.toggle('active');

            // })
            // button.addEventListener(('click'), () => {

            //     dua.classList.toggle('active');

            // })
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
