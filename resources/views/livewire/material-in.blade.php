<div>
    <h2>Data Masuk</h2>
    <input wire:model="materialin" type="text" name="masuk">
    <h2> {{ $materialin }} </h2>
    <div class="row border-bottom ">
        <div class="col-4">
            <form action="/adm/pekerja">
                <div class="input-group m-2">
                    <input wire:model="cari" type="text" class="form-control" placeholder="Cari Material" aria-label="Cari Material" name="cari">
                </div>
            </form>
        </div>
        <div class="col-6"></div>
        <div class="col"><button class="btn bg-gradient-primary  shadow-md" data-toggle="modal" data-target="#TambahMaterial">Tambah</button></div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-gradient-success text-center">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            Data Material
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Aksi</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Material</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Masuk</th>
                                <th scope="col">Keluar</th>
                                <th scope="col">stok akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <a href=" " onclick="return confirm('Hapus Data  ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="  " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                </th>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <a href=" " onclick="return confirm('Hapus Data  ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="  " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                </th>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                                <td>Data </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- <div class="card-footer"></div> -->

                <div class="container-fluid text-center m-5">
                    <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                </div>

            </div>
        </div>
    </div>
</div>
