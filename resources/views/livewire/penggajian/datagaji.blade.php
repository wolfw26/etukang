<div>
    <div class="container-fluid mr-3">
        <div class="row m-2">
            <div class="col-6 mt-5">
                <div class="card card-outline card-lightblue p-0">
                    <div class="card-body p-0">
                        <div class="container-fluid">
                            @if ($absen && $absen)

                            @endif
                            {{-- @foreach ( $tes as $absen )
                                @foreach ( $absen->datanama as $d )
                                    <p>{{ $d->nama }}</p>
                            @endforeach
                            @endforeach --}}
                            {{-- @foreach ( $absen as $b )
                                @foreach ( $b->datanama as $a )
                                    <p>{{ $a }}</p>
                            @endforeach
                            @endforeach --}}
                            {{-- @foreach ( $absen as $b )
                                <p>{{ $b->datanama }}</p>
                            @endforeach --}}
                            <table class="table table-bordered">
                                <tr>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input wire:model="tglawal" type="date" class="form-control @error('tglawl')
                                            is-invalid
                                        @enderror">
                                        @error('tglawal')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                    <td>
                                        <input wire:model="tglakhr" type="date" class="form-control @error('tglakhr')
                                            is-invalid
                                        @enderror">
                                        @error('tglakhr')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Pekerja</th>
                                    <td scope="col" class=" d-flex ">
                                        <select wire:model="namaPekerja" name="" id="" class="form-control @error('namaPekerja')
                                            is-invalid
                                        @enderror ">
                                            <option selected value="0">-- Cari --</option>
                                            @foreach ( $pekerja as $pekerjas )
                                            <option value="{{ $pekerjas->id  }}">{{ $pekerjas->nama }}</option>
                                            @endforeach
                                        </select>
                                        <button wire:click="cari({{ $namaPekerja }})" class="btn btn-sm btn-success"> <i class="fas fa-search"></i> </button>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Jabatan</th>
                                    <td scope="col">
                                        <input wire:model="jabatan" type="text" readonly class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Jumlah Hari</th>
                                    <td scope="col">
                                        <input wire:model="hari" type="text" readonly class="form-control">
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
                                        <input wire:model="lembur"  type="text" readonly class="ml-4 form-control-sm form-control">
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
                                        Rp. <input wire:model="dibayar" type="number" class="form-control form-control-sm @error('dibayar')
                                            is-invalid
                                        @enderror">
                                        @error('dibayar')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Sisa Bayar</th>
                                    <td scope="col" class=" d-flex justify-content-center">
                                        Rp. <input wire:model="sisa" type="number" class="form-control form-control-sm " readonly>
                                    </td>
                                </tr>
                            </table>
                            <button wire:click="tambah" class="btn btn-sm btn-outline-success m-2">Tambah</button>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $penggajian as $gaji )
{{ $hari }}
                                <tr>
                                    <td>{{ $gaji->nama_pekerja }}</td>
                                    <td>{{ $gaji->jabatan}}</td>
                                    <td>{{ $gaji->gapok }}</td>
                                    <td>{{ $gaji->transport }}</td>
                                    <td>{{ $gaji->makan }}</td>
                                    <td>@if($absen && $absen->count() > 0){{ $absen->count()  }}@endif</td>
                                    <td>{{ $gaji->lembur }}</td>
                                    <td>{{ $gaji->total }}</td>
                                    <td>
                                        <a class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
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
