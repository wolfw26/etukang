<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-lightblue">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Pekerja</th>
                                    <th>Jabatan</th>
                                    <th>Gaji Perhari</th>
                                    <th>Uang Transport</th>
                                    <th>Uang Makan</th>
                                    <th>Jumlah Hari</th>
                                    <th>Jumlah Lembur</th>
                                    <th>Gaji lembur</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $pekerja as $pekerjas )
                                <tr>
                                    <td>{{ $pekerjas->nama }}</td>
                                    <td>{{ $pekerjas->jabatan->jabatan }}</td>
                                    <td>{{ $pekerjas->jabatan->gapok }}</td>
                                    <td>{{ $pekerjas->jabatan->transport }}</td>
                                    <td>{{ $pekerjas->jabatan->makan }}</td>
                                    <td>{{ $pekerjas->datanama->count()  }}</td>
                                    <td>{{ $pekerjas->lembur->count()  }}</td>
                                    <td></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
