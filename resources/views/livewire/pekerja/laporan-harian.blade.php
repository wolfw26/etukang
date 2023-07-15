<div>
    <div class="container-fluid elevation-1">
        <div class="row d-flex flex-col justify-content-md-around p-3">
            <div class="col-md-6">
                <form action="">
                    <div class="form-group m-2">
                        <label for="">Keterangan</label>
                        <input wire:model="keterangan" type="text" class="form-control form-control-md">
                    </div>
                    <div class="form-group m-2">
                        <label for="">Deskripsi</label>
                        <input wire:model="deskripsi" type="text" class="form-control form-control-md">
                    </div>
                    <div class="form-group m-2">
                        <label for="">Foto Pekerjaan</label>
                        <input wire:model.debounce.5ms="gambar" type="file" class="form-control form-control-md">
                    </div>
                    <button wire:click="Simpan" class=" btn btn-outline-secondary btn-sm">Simpan</button>
                </form>
            </div>
            <div class="col-md-4">
                @if ($gambar)
                <img src="{{ $gambar->temporaryUrl() }}" alt="" style="width: 300px; height:300px">
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ( $data as $d )
            <div class="col-md-4 p-2">
                <div class="card">
                    <div class="card-body elevation-1">

                            <img class=" img-rounded" src="{{ asset($d->image) }}" alt="" style="width: 100%; height: 250px">
                        <div class="container-fluid m-2">
                            <h2 class=" text-center font-weight-bold">{{ $d->keterangan }}</h2>
                            <p class=" text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae veritatis neque, magnam exercitationem sunt, iste magni debitis dolorum ipsum, porro maiores similique doloremque! Autem repellendus, nisi aperiam ipsam totam quod!.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est, obcaecati culpa quasi deserunt sint dicta. Dolorem at quia laudantium voluptatibus veniam quo reiciendis error! Quasi minus consequatur corrupti dignissimos? </p>
                        </div>

                    </div>
                    <div class="card-footer elevation-1">
                        <i class=" text-muted mt-3">{{ $d->created_at->diffForHumans() }}</i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
