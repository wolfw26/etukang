<div>
    @if (session()->has('message'))
            <div class="alert {{ session('alert') }}">
                {{ session('message') }}
            </div>
            @endif
    <section class="row mb-2 p-md-5 border rounded ">
        <div class="col-1">

        </div>
        <!-- Head and Form Input Monitoring -->
        <div class="col-10 ">
            <h1 class="text-center">Monitoring Pekerjaan Harian </h1>
            <div class="row">
                <div class="col-md-8 col-6">
                    <form wire:submit.prevent="Tambah">
                        <div class="mb-3">
                            <label for="" class="form-label">Keterangan</label>
                            <input wire:model="keterangan" type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Keterangan Pekerjaan">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <input wire:model="deskripsi" type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Deskripsi Pekerjaan">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Komentar</label>
                            <input wire:model="komentar" type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Deskripsi Pekerjaan">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar/Foto Pekerjaan</label>
                            <input wire:model="image" class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <button type="submit">Save</button>
                    </form>
                </div>
                <div class="col-md-4 col-6 border">
                    @if ($image)
                    <img src=" {{ $image->temporaryUrl() }} " class="img-fluid" alt="...">
                    @else
                    <div class="alert alert-default-warning">Belum Ada Foto Dipilih</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="row container-fluid p-md-4 border mt-lg-4 mt-2">
            <div class="col-12">
                <div class="card-body table-responsive">
                    <table class="table table-sm table-bordered table-striped table-hover" id="table" data-show-columns="true" data-search="true" data-url="json/data1.json" data-mobile-responsive="true" data-check-on-init="true">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Action</th>
                                <th>Keterangan</th>
                                <th>Deskripsi</th>
                                <th>Gambar/Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $no => $e )
                            <tr>
                                <th>{{ $no }}</th>
                                <td class=" d-flex justify-content-around">
                                    <a href="http://" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <button wire:click="Hapus({{ $e->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                                <td>{{ $e->keterangan }}</td>
                                <td>{{ $e->deskripsi }}</td>
                                <td>{{ $e->gambar }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
