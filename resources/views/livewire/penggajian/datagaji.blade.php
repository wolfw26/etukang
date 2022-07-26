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
                                        <input wire:model="harikerja" type="text" readonly class="form-control">
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
                                    <th>Tanggal</th>
                                    <th>Periode</th>
                                    <th>Gaji <br> Perhari</th>
                                    <th>Uang <br> Transport</th>
                                    <th>Uang <br> Makan</th>
                                    <th>Jumlah <br> Hari</th>
                                    <th>Jumlah <br> Lembur</th>
                                    <th>Gaji <br> lembur</th>
                                    <th>Total</th>
                                    <th>Sisa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $penggajian as $gaji )
                                <tr class="text-center">
                                    <td>{{ $gaji->nama_pekerja }} <br> <span class=" text-muted ">{{ $gaji->jabatan}}</span> </td>
                                    <td>{{$gaji->tanggal}}</td>
                                    <td>{{$gaji->tanggalAwal}} - {{$gaji->tanggalAkhir}} </td>
                                    <td>{{ number_format($gaji->gapok) }}</td>
                                    <td>{{ number_format($gaji->transport) }}</td>
                                    <td>{{ number_format($gaji->makan) }}</td>
                                    <td>{{$gaji->hari}}</td>
                                    <td>{{ $gaji->lembur }}</td>
                                    <td>{{ number_format($gaji->upah_lembur) }}</td>
                                    <td>{{ number_format($gaji->total) }}</td>
                                    <td>{{ number_format($gaji->sisa) }}</td>
                                    <td>
                                        @if ( $gaji->sisa > 0)
                                        <a wire:click="lunas({{ $gaji->id }})" class="btn btn-sm bg-cyan"><i>Lunas</i></a>
                                        @endif
                                        <a class="btn btn-sm"><i class="fas fa-trash text-danger"></i></a>
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
