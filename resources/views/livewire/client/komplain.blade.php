<div>
    <div class="container-fluid">
        <div class="row d-flex flex-col justify-content-center">
            <div class="col-md-8 m-2">
                <div class="card">
                    <div class="card-body elevation-2">
                        <h2 class=" text-center text-cyan mb-4">Beri Tahu Admin</h2>
                        <div class="row d-flex flex-col justify-content-around">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <form action="">
                                    <input wire:model="title" class="form-control mb-3" type="text" placeholder="Tentang/Title" aria-label="default input example">
                                    <input wire:model="deskripsi" class="form-control mb-3" type="text-area" placeholder="Rincian Masalah" aria-label="default input example">
                                    <input wire:model="image" class="form-control mb-3" type="file" placeholder="Image" aria-label="default input example">
                                </form>
                                <button wire:click="Tambah({{ $proyek->id }})" class="btn btn-md btn-success">Tambah</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex flex-col justify-content-center">
            <div class="col-md-8 m-2">
                <div class="card">
                    <div class="card-body elevation-3">
                        @foreach ($data as $d )
                        <div class="card">
                            <div class="card-body elevation-2">
                                <div class="row border border-bottom p-2">
                                    <div class="col-md-4 d-flex flex-col justify-content-md-start align-items-center">
                                        <img class="img-fluid" src="{{ asset($proyek->client->foto_ktp) }}" alt="" style="width: 90px; height: 90px">
                                        <h3 class=" float-left m-2 text-muted ">{{ $proyek->client->nama }}</h3>
                                    </div>
                                </div>
                                <div class="row d-flex flex-col justify-content-around">
                                    <div class="col-md-4 p-5 m-2">
                                        <h3 class=" text-center">{{ $d->title }}</h3>
                                        <p class=" text-center text-maroon">{{ $d->deskripsi }}</p>
                                    </div>
                                    <div class="col-md-6 border m-2">
                                        <img class=" img-fluid img-rounded mb-4" src="{{ asset($d->image) }}" alt="" srcset="">
                                    </div>
                                </div>
                                <button wire:click="Hapus({{ $d->id }})" class=" btn btn-danger"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
