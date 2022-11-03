<div>
    {{-- @dd($data) --}}
    <div class="alert alert-default-primary text-center text-bold">
        <h2>PENGADUAN PELANGGAN</h2>
    </div>
    <div class="row d-flex flex-col justify-content-around">
        <div class="col-md-8">
            @foreach ( $data as $d )
            <div class="card">
                <div class="card-body elevation-3">
                    <div class="row d-flex flex-col justify-content-arround">
                        <div class="col-md-6">
                            <i class="text-muted text-center">{{$d->created_at->format('d-M-Y') }}</i>
                            <h2 class=" mb-3 text-center">{{ $d->title }}</h2>
                            <p class=" text-center">{{ $d->deskripsi }}</p>
                        </div>
                        <div class="col-md-6">
                            <img  data-toggle="modal" data-target="#exampleModal" class=" img-fluid img-rounded" src="{{ asset($d->image) }}" alt="" style="width: 250px; height:250px">
                        </div>
                    </div>
                </div>
            </div>
            @foreach ( $data as $c )
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $c->id }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>{{ $c->image }}</h2>
                            <img class=" img-fluid img-rounded elevation-2" src="{{ asset($c->image) }}" style="width: 100%; height:100%">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</div>

