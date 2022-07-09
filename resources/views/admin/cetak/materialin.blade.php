<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        /* .row::before {
            content: "";
            position: absolute;
            width: 20%;
            height: 100vh;
            bottom: 0;
            left: 50%;
            background: linear-gradient(to left, white, rgba(253, 253, 253, 0.058));
        } */

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid p-4">
        <div class="row  d-flex justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header bg-gradient-gray d-flex justify-content-center">
                        <h3 class="card-title text-bold">Laporan Material</h3>
                    </div>
                    <div class="card-body">
                        <!-- /.card-header -->
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th><u class=" text-bold">Kode</u></th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Harga Satuan</th>
                                    <th>tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $d )
                                <tr>
                                    <td scope="col"> <u class=" text-bold">{{ $d->kode_material }}</u></td>
                                    <td scope="col"> <i>{{ $d->nama_material }}</i></td>
                                    <td scope="col">{{ $d->jumlah }}</td>
                                    <td scope="col" class=" text-uppercase">{{ $d->satuan }}</td>
                                    <td scope="col">Rp. {{ number_format($d->harga_satuan,2) }}</td>
                                    <td scope="col" class=" text-uppercase">{{ $d->tanggal }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row"></div>
    </div>






    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script>
        $(function() {
            //Date picker
            $('#tanggal').datetimepicker({
                dateFormat: 'yy-mm-dd'
            });
        })
    </script>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>