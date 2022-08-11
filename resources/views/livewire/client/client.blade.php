<div>
    <header class=" bg-gray-light p-3">
        <div class="row m-2">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-image"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Proyek Selesai</span>
                        <span class="info-box-number">
                            {{ $proyekselesai->count() }}
                            <!-- <small>%</small> -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            {{-- <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-shield"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tukang</span>
                        <span class="info-box-number"></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div> --}}
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Client</span>
                        <span class="info-box-number">{{ $client->count() }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pekerja</span>
                        <span class="info-box-number">{{ $pekerja->count() }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
    </header>
    <div class="row mt-3">
        <div class="col-12 col-sm-12 col-md-8">
            <div class="card card-default elevation-2">
                <div class="card-body">
                    <h2 class="text-center text-maroon font-weight-bold">CV. JAYA MANDIRI CONTRAKTOR</h2>
                </div>
            </div>
        </div>
        <div class="col col-sm-12  col-md-4">
            <div class="card shadow-2xl">
                <div class="card-body">
                    <div class="alert alert-default-primary text-center"> Pendaftaran</div>
                    <div class="mb-3">
                        <table class="table ">
                            <tr>
                                <th class="text-center" width="60px">1.  </th>
                                <td class="text-center"> Hubungi Nomor Perusahaan untuk menanyakan ketersediaan waktu untuk mengerjakan proyek anda.</td>
                            </tr>
                            <tr>
                                <th class="text-center" width="60px">2.  </th>
                                <td class="text-center"> Jika Kontraktor bisa, lakukan pendaftaran proyek di menu proyek, Input data sesuai di Lapangan </td>
                            </tr>
                            <tr>
                                <th class="text-center" width="60px">3.  </th>
                                <td class="text-center"> Kontraktor Akan Melakukan Perhitungan Anggaran  </td>
                            </tr>
                            <tr>
                                <th class="text-center" width="60px">5.  </th>
                                <td class="text-center"> Cek di Menu RAB, Jika Sudah ada maka klik setuju jika anda setuju, dan Klik perbaiki jika anda rasa Perlu di perbaiki  </td>
                            </tr>
                            <tr>
                                <th class="text-center" width="60px">6.  </th>
                                <td class="text-center"> Jika RAB Sudah Di setujui maka segera lakukan pembayaran ke No. Rekening dari perusahaan</td>
                            </tr>
                            <tr>
                                <th class="text-center" width="60px">7.  </th>
                                <td class="text-center"> Jika RAB Sudah Di setujui maka segera lakukan pembayaran ke No. Rekening dari perusahaan</td>
                            </tr>
                            <tr>
                                <th class="text-center" width="60px">8.  </th>
                                <td class="text-center"> Setelah Melakukan Pembayaran, Selanjutnya Kontraktor akan menentukan tanggal dan kepala tukang, yang bisa anda lihat di menu proyek</td>
                            </tr>
                            <tr>
                                <th class="text-center" width="60px">9.  </th>
                                <td class="text-center">Seluruh Kegiatan Harian Bisa anda lihat di menu Proyek</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div>
