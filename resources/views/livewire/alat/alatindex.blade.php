<div>
    <div class="container p-2">
        <div class="alert bg-gradient-lightblue">
            <div class="row">
                <button wire:click="$set('pesan','all')" class="btn btn-outline-warning m-1 ">Semua</button>
                <button wire:click="$set('pesan','sewa')" class="btn btn-outline-warning m-1">Sewa</button>
                <button wire:click="$set('pesan','alat')" class="btn btn-outline-warning m-1">Alat Masuk</button>
                <button wire:click="$set('pesan','rusak')" class="btn btn-outline-warning m-1">Tidak Layak</button>
            </div>
        </div>
        {{ $pesan }}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue">Data Alat</div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Nama Alat</th>
                                        <th scope="col">Fungsi</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Kepemilikan</th>
                                        <th scope="col">satuan</th>
                                        <th scope="col">harga satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-gradient-lightblue rounded-bottom"></div>
                </div>
            </div>
        </div>
        <div class="alert alert-success"></div>
        @if ($pesan == 'all')
        <div class="alert alert-success">Tampilkan Semua</div>
        @elseif($pesan == 'sewa')
        <div class="alert alert-success">Sewa</div>
        @elseif($pesan == 'alat')
        <livewire:Alat.alatin />
        @elseif($pesan == 'rusak')
        <div class="alert alert-success">rusak</div>
        @endif
    </div>
</div>