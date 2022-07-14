<div>
    <div class="container p-2">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue p-2">
                        <div class="row ">
                            <div class="col-6 text-start p-2">
                                <div class="input-group mr-4">
                                    <input wire:model="cari" type="text" class="form-control form-control-sm" placeholder="Cari Material" aria-label="Cari Material" name="cari">
                                </div>
                            </div>
                            <div class="col-8">
                                <h2 class="ml-6">Absen </h2>
                            </div>
                            <div class="col-6">
                                <select wire:model="pilihan" name="pekerja" id="pekerja">
                                    @foreach ( $pekerja as $p )

                                    <option value=" {{ $p->id }} "> {{ $p->nama }} </option>
                                    @endforeach
                                </select>
                                {{ $pilihan }}
                                <select wire:model="proyek_id" name="pekerja" id="pekerja">
                                    @foreach ( $proyek as $p )
                                    <option value=" {{ $p->id }} "> {{ $p->nama_proyek }} </option>
                                    @endforeach
                                </select>
                                {{ $proyek_id }}
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 430px;">

                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Pekerja</th>
                                        <th scope="col">Tanggal Pekerjaan</th>
                                        <th scope="col">Nama Proyek</th>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
                            </table>

                            <div class="container-fluid text-center m-5">
                                <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer bg-gradient-lightblue rounded-bottom"></div>
                </div>
            </div>
        </div>
    </div>

</div>
