<div>
    <div class="container-fluid mr-3">
        <div class="row m-2">
            <div class="col-6 mt-5">
                <div class="card card-outline card-lightblue p-0">
                    <div class="card-body p-0">
                        <div class="container-fluid">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input wire:model="tglawal" type="date" class="form-control">
                                    </td>
                                    <td>
                                        <input wire:model="tglakhr" type="date" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Pekerja</th>
                                    <td scope="col" class=" d-flex  ">
                                        <select wire:model="namaPekerja" name="" id="" class="form-control">
                                            <option disabled>-- Cari --</option>
                                        </select>
                                        <button class="btn btn-sm btn-success"> <i class="fas fa-search"></i> </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Jabatan</th>
                                    <td scope="col">
                                        <input wire:model="jabatan" type="text" readonly class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Gaji Pokok</th>
                                    <td scope="col">
                                        <input wire:model="gapok" type="text" readonly class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Uang Makan</th>
                                    <td scope="col">
                                        <input wire:model="makan" type="text" readonly class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Uang Transport</th>
                                    <td scope="col">
                                        <input wire:model="transport" type="text" readonly class="form-control">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mt-5">
                <div class="card card-outline card-lightblue p-0">
                    <div class="card-body p-0">
                        <div class="container-fluid">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-right">Lembur</th>
                                    <td scope="col">
                                        <input wire:model="lembur" type="text" readonly class="ml-4 form-control-sm form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Upah Lembur</th>
                                    <td scope="col" class=" d-flex justify-content-center">
                                        Rp. <input wire:model="upahLembur" type="number" class="form-control form-control-sm ">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Bonus</th>
                                    <td scope="col" class=" d-flex justify-content-center">
                                        Rp. <input wire:model="bonus" type="number" class="form-control form-control-sm ">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Potongan</th>
                                    <td scope="col" class=" d-flex justify-content-center">
                                        Rp. <input wire:model="potongan" type="number" class="form-control form-control-sm ">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Total</th>
                                    <td scope="col" class=" d-flex justify-content-center">
                                        Rp. <input wire:model="total" type="number" class="form-control form-control-sm " readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Dibayar</th>
                                    <td scope="col" class=" d-flex justify-content-center">
                                        Rp. <input wire:model="dibayar" type="number" class="form-control form-control-sm ">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Sisa Bayar</th>
                                    <td scope="col" class=" d-flex justify-content-center">
                                        Rp. <input wire:model="sisa" type="number" class="form-control form-control-sm " readonly>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-3">
            <hr>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card card-outline card-lightblue">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Pekerja</th>
                                    <th>Jabatan</th>
                                    <th>Gaji Perhari</th>
                                    <th>Uang Transport</th>
                                    <th>Uang Makan</th>
                                    <th>Jumlah Hari</th>
                                    <th>Jumlah Lembur</th>
                                    <th>Gaji lembur</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $pekerja as $pekerjas )
                                <tr>
                                    <td>{{ $pekerjas->nama }}</td>
                                    <td>{{ $pekerjas->jabatan->jabatan }}</td>
                                    <td>{{ $pekerjas->jabatan->gapok }}</td>
                                    <td>{{ $pekerjas->jabatan->transport }}</td>
                                    <td>{{ $pekerjas->jabatan->makan }}</td>
                                    <td>{{ $pekerjas->datanama->count()  }}</td>
                                    <td>{{ $pekerjas->lembur->count()  }}</td>
                                    <td></td>
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
