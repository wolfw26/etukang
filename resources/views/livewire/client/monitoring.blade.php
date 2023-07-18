<div>
    <section class="row mb-2 p-md-5 border rounded ">
        <div class="col-1"></div>
        <!-- Head and Form Input Monitoring -->
        <div class="col-10 ">
            <h1 class="text-center">Monitoring Pekerjaan Harian</h1>
            <div class="row">
                <div class="col-md-8 col-6">
                    <div class="col-6">
                        <form wire:submit.prevent="save">
                            <div class="mb-3">
                                <label for="" class="form-label">Keterangan</label>
                                <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Keterangan Pekerjaan">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Deskripsi Pekerjaan">
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Gambar/Foto Pekerjaan</label>
                                <input wire:model="photo" class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-6 border">
                    @if ($photo)
                    <img src=" {{ $photo->temporaryUrl() }} " class="img-fluid" alt="...">
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
                    <table class="table table-sm table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Keterangan</th>
                                <th>Deskripsi</th>
                                <th>Gambar/Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1.</th>
                                <td class=" d-flex justify-content-around">
                                    <a href="http://" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="http://" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                                <td>Pekerjaan Awal</td>
                                <td>Pembuatan Batas pekerjaan,pengukuran</td>
                                <td>https://www/fotobangunan.jpg/uploud</td>
                            </tr>
                            <tr>
                                <th>2.</th>
                                <td class=" d-flex justify-content-around">
                                    <a href="http://" class="btn btn-sm btn-warning"><i class="fas fa-sm fa-edit"></i></a>
                                    <a href="http://" class="btn btn-sm btn-danger"><i class="fas fa-sm fa-trash"></i></a>
                                </td>
                                <td>Pekerjaan Awal</td>
                                <td>Pembuatan Batas pekerjaan,pengukuran</td>
                                <td>https://www/fotobangunan.jpg/uploud</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
