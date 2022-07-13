<div>
    <div class="alert alert-light mb-3" role="alert">
        <div class="row">
            <div class="col-7">
                <button class="btn btn-outline-secondary m-1" wire:click="all"> Material All</button>

                <button class="btn btn-outline-secondary m-1" wire:click="masuk">Material Masuk</button>

                <button class="btn btn-outline-secondary m-1" wire:click="keluar">Material Keluar</button>
            </div>
            <div class="col-4 ">
                @if (session('tambah'))
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                    <!-- <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol> -->
                </svg>
                <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ session('tambah') }}
                    </div>
                    <button type="button" class="btn " data-dismiss="alert">x</button>
                </div>
                @elseif (session('hapus'))
                <div class="alert alert-warning d-flex justify-content-between">
                    {{ session('hapus') }}
                    <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @if ( $page == 'masuk' )
        @livewire('material-in')
        @elseif ( $page == 'keluar')
        @livewire('material-out')
        @else
        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-success text-center">
                        <div class="row">
                            <div class="col-4">

                            </div>
                            <div class="col-4">
                                Data Material
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                    @if ( $data && $data->count() > 0)
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Aksi</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Harga Satuan</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $d )
                                <tr>
                                    <th scope="row">
                                        <a href=" /adm/material/d/{{ $d->id }} " onclick="return confirm('Hapus Data   {{ $d->nama_material }} ');" class="btn btn-sm bg-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a wire:click="edit( {{ $d->id }})" data-toggle="modal" data-target="#tambahMaterial" class="btn btn-sm bg-teal">
                                            <i class="fas fa-edit" title="Edit"></i>
                                        </a>
                                    </th>
                                    <td class="text-bold"> <u> {{ $d->kode_material}}</u></td>
                                    <td> {{ $d->nama_material}}</td>
                                    <td> {{ $d->satuan}}</td>
                                    <td> {{ number_format($d->harga_satuan,2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $data->links() }}
                    </div>
                    @else
                    <div class="container-fluid text-center m-5">
                        <h4 class="text-danger"> <strong> <i>Tidak Ada Data</i></strong></h4>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
