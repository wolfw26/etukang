<div class="m-0 p-0">
    <div class="alert alert-info text-center text-capitalize"> Data Proyek</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-navy">
                    <div class="card-body p-0">
                        <div class="row ">
                            <div class="col-4 p-2">
                                <div class="card m-2 elevation-2" style="width: 18 rem ;">
                                    <div class="container-fluid rounded">
                                        <img style="height: 200px; width: 100%; " src="{{ asset( $client->foto_ktp) }}" class="img-fluid ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <table class="table  mt-3">
                                    <tr>
                                        <th>Pemilik : </th>
                                        <td>{{ $proyek->client->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat : </th>
                                        <td>{{ $proyek->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Luas Tanah : </th>
                                        <td>{{ $proyek->luas_tanah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Panjang Bangunan : <br> Lebar Bangunan </th>
                                        <td>{{ $proyek->panjang_rumah }} <br> {{ $proyek->lebar_rumah }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-4">
                                <div class="mt-2 text-center ">
                                    <div class="alert
                                    @if ( $proyek->status == "PERENCANAAN")
                                    alert-default-primary
                                    @elseif( $proyek->status == "DIKERJAKAN")
                                        alert-success
                                        @else
                                        alert-light
                                    @endif">{{ $proyek->status }}</div>
                                </div> <br>
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                <div class="form-check">
                                                    <input wire:model="radio" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="PERENCANAAN" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Perencanaan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input wire:model="radio" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="DIKERJAKAN">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Dikerjakan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input wire:model="radio" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="SELESAI">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Selesai
                                                    </label>
                                                </div>
                                                <button wire:click="status({{ $proyek->id }})" class="btn btn-success"> <i class="fas fa-plus"></i>Tetapkan</button>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
