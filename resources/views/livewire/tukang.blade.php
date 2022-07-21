<div>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card card-outline card-warning mt-3">
                    <div class="card-header">Buat Akun Tukang</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="pekerja">Pilih Pekerja/Tukang</label>
                            <select wire:model="idpekerja" name="pekerja" id="pekerja" class="form-control">
                                <option disabled>-- Pilih --</option>
                                @foreach ( $pekerja as $p )
                                <option value="{{ $p->id }}"> {{ $p->nama }} - ({{ $p->jabatan->jabatan }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email">E-Mail</label>
                            <input wire:model="email" type="email" name="email" id="email" class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input wire:model="username" type="text" name="username" id="username" class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                            <label for="password"> Password</label>
                            <input wire:model="password" type="password" name="password" id="password" class="form-control form-control-sm">
                        </div>
                        <button wire:click="tambah" class="btn btn-outline-success"> <i class="fas fa-plus-circle"></i> Buat</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-warning m-4">
                    <table class="tabel table-borderless">
                        <thead>
                            <tr class="text-center">
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
