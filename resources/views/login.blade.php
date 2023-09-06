<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{-- icon --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
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
        .active {
            display: none;
        }
        .login{
            height : 93.5vh; display : flex; flex-direction : column; align-items : center; justify-content : center; width : 100%;
        }
    </style>
</head>
{{-- background=" {{ asset('img/login2.png') }}" --}}
<body class="hold-transition"  style=" background : blue; overflow-x : hidden;">
    <div >
            <div style="display : flex  ;width : 100vw; height : 100vh; justify-content:space-between; align-items: center;">
                        <div class="text-white text-center" style="width: 50%; display : flex ;flex-direction : column; justify-content : space-between ;height : 100%;  ">
                            <div class="" style=" margin-top : 14rem;">
                                <h1 style="font-weight: 600;"><span style="font-size: 62px; font-weight : bold;">E</span>tuk<i style="font-size: 22px; font-weight : 100; color :white;" class="fi fi-rs-home"></i>ng.</h1>
                                <h3 style="font-weight: 100;"> Sistem Informasi Jasa Pembangunan Dan Renovasi</h3>
                            </div>
                            <button style="margin : 10px; position : fixed ; left : 2 ; bottom : 0; border : none; padding : 3px; background : none; color : white; height : 32px; border : white;"><a style="color : white;" href="/">Kembali Ke landing page </a></button>
                        </div>
                        <div   class=" d-block bg-transparent" style="background : white; width : 50%; ">
                            <div class="login-card-body" >
                                @if (session('loginError'))
                                <div style="margin-top:4rem;" class="alert alert-warning d-flex justify-content-between">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn " data-dismiss="alert">x</button>
                                </div>
                                @endif
                                @if (session('sukses'))
                                <div style="margin-top:4rem;"  class="alert alert-success d-flex justify-content-between">
                                    {{ session('sukses') }}
                                    <button type="button" class="btn btn-secondary" data-dismiss="alert">x</button>
                                </div>
                                @endif
                                {{-- <div class="card-header rounded-top bg-navy text-center" style="background-color: gray; font-weight:900; height:100%; margin-bottom:2px">
                                    <a href="{{ asset('assets/index2.html') }}" style="color: white;">LOGIN</a>
                                </div> --}}

                                <div id="left" class="p-5 login">
                                    <h1>Login Di bawah</h1>
                                    <form style="margin-top : 72px; width :90%;" action="/" method="POST">
                                        @csrf
                                        <div  class="input-group mb-3">
                                            <input placeholder="Username" type="text" class="form-control @error('name')
                                                is-invalid
                                            @enderror" name="name" required  >
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
                                            <input  type="password" class="form-control @error('password')
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
                                        <p>Belum Punya Akun ? <a id="toggle" href="#">Daftar Disini</a> </p>
                                        <button style="width : 100%; background : blue; color : white; border : none; padding : 12px; border-radius : 32px; font-weight : bold;" type="submit">Masuk</button>
                                    </form>

                                </div>
                                <div id="right" class="card-body active" style="max-height: 93.5vh; overflow-y : scroll;">
                                    <div class="card-body login-card-body ">
                                        <h1 >Registrasi Di bawah</h1>
                                        <form style="margin-top : 32px;" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
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
                                            <p>Sudah Punya Akun ? <a id="toggle_register" href="#">Login Disini</a> </p>
                                            <button style="width : 100%; background : blue; color : white; border : none; padding : 12px; border-radius : 32px; font-weight : bold;" type="submit">Daftar</button>

                                        </form>
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
    <script>
      var toggler = document.getElementById('toggle');
      var toggler_register = document.getElementById('toggle_register');
      var right = document.getElementById('right');
      var left = document.getElementById('left');
      console.log(toggler)
        toggler.addEventListener('click',function(){
            right.classList.toggle("active");
            left.classList.toggle("active");
            left.classList.toggle("login")
        })
        toggler_register.addEventListener('click',function(){
            right.classList.toggle("active");
            left.classList.toggle("active");
            left.classList.toggle("login")
        })
    </script>
</body>

</html>
