{{-- @dd($ahs->id) --}}
@extends('component.template')

@section('konten')

<!-- Modal -->
<div class="modal fade" id="TambahAhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data AHS</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('ahspdata.add', $ahsp->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-floating mb-3 mt-3" id="tes1">
                                <label for="jenis_proyek">Jenis Data</label>
                                <select class="form-select form-control" id="jenis_proyek" name="jenis_proyek" onchange="getValue();">
                                    <option class=" active" disabled>Jenis-Data</option>
                                    <option value="alat">Alat</option>
                                    <option value="bahan">Bahan</option>
                                    <option value="upah">Upah</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container active" id="bahan">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3 mt-3">
                                    <label for="nama_material">Bahan</label>
                                    <select class="form-select form-control" id="material" name="material">
                                        <option class=" active" disabled>Pilih Material</option>
                                        @foreach ( $bahan as $b )
                                        <option value="{{ $b->id }}">{{ $b->nama_material }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <label for="volume">Koefisien</label>
                            <input type="integer" class="form-control" id="koefisien" placeholder="0.000" name="koefisien" value="{{ old('koefisien') }}">
                        </div>
                    </div>
                    <div class="container " id="keterangan">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3 mt-3" id="keterangan">
                                    <label for="nama_material">Keterangan</label>
                                    <input type="text" class="form-control" id="nama_material" placeholder="Rincian" name="nama_material">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating mb-3 mt-3" id="keterangan">
                                    <label for="satuan">Satuan</label>
                                    <input type="text" class="form-control" id="satuan" placeholder="satuan " name="satuan">
                                </div>
                            </div>
                            {{-- <div class="form-floating mb-3 mt-3 active" id="keterangan">
                                <label for="nama_material">Coba</label>
                                <select class="form-select form-control" id="jenis_proyek" name="jenis_proyek">
                                    <option class=" active" disabled>Jenis-Data</option>
                                    <option value="upah">Upah</option>
                                    <option value="bahan">Bahan</option>
                                    <option value="alat">Alat</option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="form-floating mb-3 mt-3" id="keterangan">
                            <label for="volume">Koefisien</label>
                            <input type="integer" class="form-control" id="volume" placeholder="0.000" name="volume">
                        </div>
                        <div class="form-floating mb-3 mt-3" id="keterangan">
                            <label for="harga_satuan">Harga Satuan</label>
                            <input type="integer" class="form-control" id="harga_satuan" placeholder="Harga Satuan .." name="harga_satuan">
                        </div>
                    </div>



                    {{-- <div class="input-group mb-3" id="keterangan">
                        <select class="form-select form-control" id="jenis_proyek" name="jenis_proyek">
                            <option class=" active" disabled>Jenis-Data</option>
                            <option value="upah">Upah</option>
                            <option value="bahan">Bahan</option>
                            <option value="alat">Alat</option>
                        </select>
                        <input type="text" class="form-control" placeholder="Bahan Material">
                    </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .active {
        display: none;
    }
</style>
<script>
    function getValue() {
        var valueData = document.getElementById("jenis_proyek").value;
        var ket = document.getElementById("keterangan");
        var coba = document.getElementById("bahan");
        console.log(valueData);
        if (valueData == "bahan") {
            coba.classList.remove('active')
            ket.classList.add('active');
        } else {
            ket.classList.remove('active');
            coba.classList.add('active')
        }

    }
</script>

@endsection
