<div>
    <div wire:ignore.self class="modal fade" id="tambahAlat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="input-group mb-3">
                        <select wire:model="dropdown" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                            @foreach ( $data as $d )
                            <option value="{{ $d->id }}">{{ $d->nama}}</option>
                            @endforeach
                        </select>
                        {{ $dropdown }}
                    </div>
                    <div class="form-floating mb-3">
                        <label for="deskripsi">Koefisien</label>
                        <input wire:model="volume" type="text" class="form-control @error('volume')
                            is-invalid
                        @enderror " id="volume">
                        @error('volume')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="satuan">Satuan</label>
                        <input wire:model="satuan" type="text" class="form-control " id="satuan" readonly>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input value="Rp. {{ number_format($harga_satuan,2) }}" type="text" class="form-control  " id="deskripsi" disabled>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
</div>
