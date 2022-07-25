<div class="mt-3">
    <div class="container p-0 mt-3">
        <div class="alert bg-gradient-lightblue">
            <div class="row">
                <button wire:click="$set('pesan','all')" class="btn btn-outline-warning m-1 ">Semua</button>
                <button wire:click="$set('pesan','sewa')" class="btn btn-outline-warning m-1">Sewa</button>
                <button wire:click="$set('pesan','alat')" class="btn btn-outline-warning m-1">Alat Masuk</button>
                <button wire:click="$set('pesan','rusak')" class="btn btn-outline-warning m-1">Tidak Layak</button>
            </div>
        </div>
        @if ($pesan == 'all')
        @livewire('alat.alathome')
        @elseif($pesan == 'sewa')
        @livewire('alat.alatsewa')
        @elseif($pesan == 'alat')
        @livewire('alat.alatin')
        @elseif($pesan == 'rusak')
        @livewire('alat.alatrusak')
        @endif
    </div>
</div>
