<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css'); }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css'); }}">
    <style>
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;




            }
        }
    </style>
</head>
{{-- background=" {{ asset('img/login2.png') }}" --}}
<body class="hold-transition login-page"  style="background-attachment: fixed; background-repeat: no-repeat; background-size: contain ; background : blue;">
    <div class="container-fluid" style="height: 100% ;">
        <div class="row" style="background-size: cover; background-attachment: fixed; background-position: -30vh -15rem;">
            <div class="col-8 col-md-8 col-sm-12 " style="margin-top:25vh ; padding:4px;  ">
                <div class="container-fluid ">
                    <div class="container p-3">
                        <div class="login-box mx-auto m-2 d-block bg-transparent">
                            <div class="login-card-body  shadow-2xl">
                                @if (session('loginError'))
                                <div class="alert alert-warning d-flex justify-content-between">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                                </div>
                                @endif
                                {{-- <div class="card-header rounded-top bg-navy text-center" style="background-color: gray; font-weight:900; height:100%; margin-bottom:2px">
                                    <a href="{{ asset('assets/index2.html') }}" style="color: white;">LOGIN</a>
                                </div> --}}
                                <h1>Login Di bawah</h1>
                                <div class="card-body login-card-body  p-5" style="height: 40vh ;">
                                    <form action="/" method="POST">
                                        @csrf
                                        <label for="name">Username</label>
                                        <div class="input-group mb-3">

                                            <input placeholder="Username" type="text" class="form-control @error('name')
                                                is-invalid
                                            @enderror " name="name" required autocomplete="off" value=" {{ old('name') }} ">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control @error('password')
                                                is-invalid
                                            @enderror " placeholder="Password" name="password" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-4"><button type="submit" class="btn btn-outline-success">Masuk</button></div>
                                    </form>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md col-sm-12 p-sm-5  p-0" id="right">
                <div class="container-fluid border-left border-10" style="width: 50vh ; margin-right:0">
                    <div class="card shadow-2xl shadow-inner shadow-md mt-2">
                        <div class="card-header p-1">
                            <div class="card-header rounded-top text-center p-3 bg-gray" style="font-weight:900; height:100%; font-size:20px; margin-bottom:2px">
                                <a href="{{ asset('assets/index2.html') }}" style="color:white;text-shadow: 3px 2px 4px gray ">Registrasi</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session('sukses'))
                            <div class="alert alert-success d-flex justify-content-between">
                                {{ session('sukses') }}
                                <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                            </div>
                            @endif
                            <div class="card-body login-card-body ">
                                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('nama') is-invalid
                                            @enderror " placeholder="Nama Lengkap" name="nama" required autocomplete="off" value="{{ old('nama') }}">
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="date" class="form-control mb-2" id="tanggal" name="tanggal" required data-toggle="datetimepicker">
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required class="form-control border-right @error('tempat_lahir')
                                                    is-invalid
                                                    @enderror">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('alamat') is-invalid
                                            @enderror " placeholder="Alamat Lengkap" name="alamat" required value="{{ old('alamat') }}" autocomplete="off">
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3 mt-3">
                                        <select class="form-select form-control" id="jk" name="jk">
                                            <option class="active" disabled>Jenis Kelamin</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('no_ktp') is-invalid
                                            @enderror " placeholder="No KTP" name="no_ktp" required autocomplete="off" value="{{ old('no_ktp') }}">
                                        @error('no_ktp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label for="foto_ktp">Foto KTP</label>
                                    <div class="custom-file">
                                        <input type="file" class="fornm-control" id="foto_ktp" name="foto_ktp" value=" {{ old('foto_ktp') }}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control @error('no_telp') is-invalid
                                            @enderror " placeholder="No telp" name="no_telp" required autocomplete="off" value="{{ old('no_telp') }}">
                                        @error('no_telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>



                                    <!-- <div class="form-floating mb-3 mt-3">
                                            <select class="form-select form-control" id="rule" name="rule">
                                                <option value="client">Client</option>
                                            </select>
                                        </div> -->
                                    <input type="hidden" name="rule" id="rule" value="client">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('username') is-invalid
                                            @enderror " placeholder="username" name="username" required autocomplete="off" value="{{ old('username') }}">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control @error('email')
                                                is-invalid
                                            @enderror " placeholder="Email" name="email" required autocomplete="off" value=" {{ old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control @error('password')
                                                is-invalid
                                            @enderror" placeholder="Password" name="password" required>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="col-4"><button type="submit" class="btn btn-outline-primary">Daftar</button></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body shadow-2xl bg-gradient-primary rounded">
                            <div class="continer">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="alert alert-heading">Tes</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="alert alert-success">Tes</div>
                                    </div>
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>


    <!-- <div class="container-fluid m-0">
        <div class="row">
            <div class="col-9">
                <div class="container p-3">
                    <div class="login-box mx-auto m-2 d-block bg-transparent">
                        <div class="card bg-transparent">
                            <div class="card-header rounded-top" style="background-color: rgba(172, 66, 66, 0.988); font-weight:900; height:100%; margin-bottom:2px">
                                <a href="{{ asset('assets/index2.html') }}" style="color: white; text-shadow: 3px 2px 4px gray ">LOGIN</a>
                            </div>
                            <div class="card-body login-card-body  rounded-bottom">
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4"><button type="submit" class="btn btn-primary btn-block">Masuk</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col bg-white">
                <div class="container-fluid">
                    <div class="card shadow-md">
                        <div class="card-header p-1">
                            <div class="card-header rounded-top text-center p-3" style="background-color: rgba(172, 66, 66, 0.988); font-weight:900; height:100%; margin-bottom:2px">
                                <a href="{{ asset('assets/index2.html') }}" style="color: white; text-shadow: 3px 2px 4px gray ">LOGIN</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body login-card-body  rounded-bottom">
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4"><button type="submit" class="btn btn-primary btn-block">Masuk</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script>
        // alert("hell")
        $(function() {
            //Date picker
            $('#tanggal').datetimepicker({
                dateFormat: 'yy-mm-dd'
            });
        })
    </script>
</body>

</html>
