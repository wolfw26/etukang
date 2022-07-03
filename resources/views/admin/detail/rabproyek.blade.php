@extends('component.template')
@section('konten')
<div class="container-fluid bg-gradient-light p-2">
    <div class="row m-2">
        <div class="col-6">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Volume</th>
                        <th scope="col" class="w-35 ">Pilih AHS</th>
                        <th scope="col" class="w-20 ">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="" method="post">
                            @csrf
                            <td>
                                <div class="form-floating">
                                    <input type="text" name="volume_rab" id="volume_rab" placeholder="Volume Pekerjaan">
                                </div>
                            </td>
                            <td>
                                <select class="form-select form-control" id="ahs" name="ahs" required>
                                    <option class=" active" disabled>AHS</option>
                                    @foreach ( $data as $d )
                                    <option value="{{ $d->id }}">{{ $d->kode_ahs }} - {{ $d->nama_ahs }}</option>
                                    @endforeach


                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i></button>
                            </td>
                        </form>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
