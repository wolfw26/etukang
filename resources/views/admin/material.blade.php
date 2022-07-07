@extends('component.template')
@section('konten')

<div class="container-fluid mb-3 p-0">
    {{-- <h1 class="text-center">Halaman <strong style="color: brown;">Material</strong></h1> --}}
    @livewire('material-index')
</div>


<!-- Modal -->
<div class="modal fade" id="TambahMaterial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Material</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('material.add') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama_material">1. Kode Material </label>
                                <input type="text" class="form-control" id="kode_material" placeholder="Exp. A.b.1.2" name="kode_material">
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <label for="nama_material">2. Material </label>
                                <input type="text" class="form-control" id="nama_material" placeholder="material" name="nama_material">
                            </div>

                            <div class="form-floating mb-3 mt-3">
                                <label for="satuan">3. satuan </label>
                                <input type="text" class="form-control" id="satuan" placeholder="satuan " name="satuan">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label for="harga_satuan">4. Harga Satuan </label>
                        <input type="integer" class="form-control" id="harga_satuan" placeholder="Harga Satuan .. Exp. 350000" name="harga_satuan">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
