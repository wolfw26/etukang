<div>
    <div wire:ignore.self class="modal fade" id="tambahUpah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Upah</h5>
                </div>
                <div class="modal-body">
                    <!-- <form wire:submit.prevent="tambahUpah"> -->
                    <div class="form-floating mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <input wire:model="deskripsi" type="text" class="form-control" id="deskripsi">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="volume">Koefisien</label>
                        <input wire:model="volume" type="float" class="form-control" id="volume">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="satuan">Satuan</label>
                        <input wire:model="satuan" type="text" class="form-control" id="satuan">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="harga">Harga Satuan</label>
                        <input wire:model="harga" type="number" class="form-control" id="floatingInput">
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