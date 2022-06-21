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
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="container-fluid" style="height: 100vh ;">
        <div class="row " style="background: url('/img/alat.jpg');background-size: cover; background-attachment: fixed; background-position: 0 -20rem;">
            <div class="col-8" style="margin-top:25vh ; padding:4px;  ">
                <div class="container-fluid ">
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
            </div>
            <div class="col p-2 shadow-lg" style="background: linear-gradient(to top, #ffffff 3%, #cc0000 98%); height: 100vh ;">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="card shadow-md" style="margin-top:20vh; ">
                            <div class="card-header p-1">
                                <div class="card-header rounded-top text-center p-3 bg-info" style="font-weight:900; height:100%; font-size:20px; margin-bottom:2px">
                                    <a href="{{ asset('assets/index2.html') }}" style="color:white;text-shadow: 3px 2px 4px gray ">Registrasi</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-body login-card-body  rounded-bottom">
                                    <form action="/register" method="POST">
                                        @csrf

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control @error('username') is-invalid
                                            @enderror " placeholder="username" name="username" required autocomplete="off" value="{{ old('username') }}">
                                            @error('username')
                                            <div class="invalid-feedback">
                                                Username Salah
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control @error('email')
                                                is-invalid
                                            @enderror" placeholder="Email" name="email" required autocomplete="off" value="{{ old('email') }}">
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
                                            <!-- <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col-4"><button type="submit" class="btn btn-primary btn-block">Daftar</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>
