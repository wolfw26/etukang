<div>
    <div wire:ignore.self class="modal fade" id="tambahUpah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    @if (session()->has('berhasil'))
                    <div class="alert alert-success">
                        {{ session('berhasil') }}
                    </div>
                    @endif
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pekerja</h5>
                </div>
                <div class="modal-body">
                    <!-- <form wire:submit.prevent="tambahUpah"> -->
                    <div class="form-floating mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <input wire:model="deskripsi" type="text" class="form-control @error('deskripsi')
                            is-invalid
                        @enderror " id="deskripsi">
                        @error('deskripsi')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="volume">Koefisien</label>
                        <input wire:model="volume" type="float" class="form-control @error('volume')
                            is-invalid
                        @enderror" id="volume">
                        @error('volume')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="satuan">Satuan</label>
                        <input wire:model="satuan" type="text" class="form-control @error('satuan')
                            is-invalid
                        @enderror" id="satuan">
                        @error('satuan')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="harga">Harga Satuan</label>
                        <input wire:model="harga" type="number" class="form-control @error('harga')
                            is-invalid
                        @enderror" id="floatingInput">
                        @error('harga')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="tambahUpah" type="submit" class="btn btn-primary">Tambah</button>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
