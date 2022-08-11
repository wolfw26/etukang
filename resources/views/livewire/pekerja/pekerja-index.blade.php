<div>
    <div class="container">
        <div class="card card-default elevation-1">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        @if ( $pekerja->image != null)
                                        <div class="container-fluid rounded">
                                            <img style="height: 300px; width: 100%; " src="{{ asset( $pekerja->image) }}" class="img-fluid img-thumbnail elevation-1">
                                        </div>
                                        @else
                                        <i class="fas fa-user fa-3x"></i>
                                        @endif
                                    </div>
                                    <div class="col-4">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>{{ $pekerja->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>{{ $pekerja->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <th>T.Tgl lahir</th>
                                                    <td>{{ $pekerja->tempat_lahir }}. {{ date('d-F-Y',strtotime($pekerja->tgl_lahir)) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jabatan</th>
                                                    <td>{{ $pekerja->jabatan->jabatan }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
