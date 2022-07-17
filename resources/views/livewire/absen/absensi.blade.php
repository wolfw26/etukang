<div>

    <div class="container p-1">
        <div class="row mb-2">
            <div class="col-12">
                <div class="alert alert-heading alert-default-secondary ">
                    <div class="row">
                        <div class="col-4"><button wire:click="back" class="btn  btn-outline-secondary">Beranda</button></div>
                        <div class="col-8">
                            <h2>SELAMAT DATANG</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($absensi != '')
        @livewire('absendata',['data'=> $absensi])
        @else
        <div class="row">
            @foreach ( $proyek as $p )
            <div class="col-4">
                <div class="card card-outline card-secondary shadow-2xl">
                    <div class="card-header">
                        <span> {{ $p->nama_proyek }} </span>
                    </div>
                    <div class="card-body p-3 mb-2">

                        <tr class=" m-2 text-decoration-none">
                            <td> Total Absensi : <span class="text-center text-bold"> 12</span></td>
                        </tr> <br>
                        <tr class=" text-decoration-none m-2">
                            <td>Total Lembur : <span class="text-center text-bold"> 12</span></td>
                        </tr>

                    </div>
                    <div class="card-footer">
                        <tr>
                            <td class=" d-inline-flex justify-content-between p-1">
                                <a wire:click="absen( {{ $p->id }} )" type="button" class="btn btn-sm" data-toggle="modal" data-target="#edit">
                                    <i class="fas fa-edit text-teal" title="Absen">ABSEN</i>
                                </a>
                                <a href="" class="btn btn-sm p-2" title="lembur">
                                    <i class="fas fa-user text-primary m-2">Lembur</i>
                                </a>
                                <a href="" onclick="return confirm('Hapus Data   ');" class="btn btn-sm" title="hapus">
                                    <i class="fas fa-trash text-danger">Hapus</i>
                                </a>
                            </td>
                        </tr>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    @endif





    <!-- <div class="row">
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
        </div> -->
</div>
