<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('js/particles.js')}}" defer></script>
    <script src="{{asset('js/main.js')}}" defer></script>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('dist/js/adminlte.min.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/landing.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}" type="text/css">
    <title>Landing Page E Tukang</title>
</head>

<body style="padding : 0px; margin : 0px;">
    <nav class="nav  navbar-expand-lg ">
        <div class="container-fluid">

            <div class="row">
                <div class="col-9">
                    <div class="logo">
                        E<span style="color :rgb(255, 196, 0);font-size:22px;font-weight : 100;"> Tukang_</span>
                    </div>
                </div>
                <div class="col-3">
                    <ul class="mt-3">
                        <li><a class="page-scroll" href="#home">Home</a></li>
                        <li><a class="page-scroll" href="#about">About Us</a></li>
                        <li><a class="page-scroll" href="#news">Portofolio</a></li>
                        <li><a class="page-scroll" href="{{ route('cekharga') }}">Cek Harga Rumah</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </nav>
    <div id="home" class="home">
        <div id="particles-js" class="banner">
            <div class="font">
                <h3 class="welcome">
                    Selamat Datang
                </h3>
                <h6 style="font-weight: 100; ">Di Sistem Informasi Jasa Pembangunan Dan Renovasi</h6>
                <br>
                <p class="small">Bersama Kami Membangun Negeri</p>
                {{-- <button class="button_login"> --}}
                <a class="badge  badge-pill badge-warning" style="text-decoration : none; font-weight : 50;" href="/login">MASUK</a>
                {{-- </button> --}}
                {{-- <p class="arab">>بسم الله الرحمن الرحيم --}}

                {{-- </p> --}}
            </div>

        </div>
    </div>
    <section class="about" id="about">
        <div class="deskripsi">
            <h2>Tentang Kami</h2>
            @if ( $tentang && $tentang->count() > 0)


            <p>{{ $tentang->deskripsi }}
            </p>
            <p class=" text-muted text-uppercase">#{{ $tentang->judul }}</p>

            {{-- <button class="button_login_2"> <a style="text-decoration : none; font-weight : 100;" href="/login">LIHAT LEBIH LANJUT</a></button> --}}
        </div>
        <div class="gambar">
            <img src="{{asset($tentang->gambar)}}" alt="landing.jpg" class="img">

        </div>
        @endif
    </section>
    <section class="news" id="news">
        <h2>Hasil Pekerjaan Kami</h2>
        <div class="services-cards">
            <div class="row">
                @foreach ( $gambar as $r )
                <div class="col-4 m-5">
                    <div class="services-card">
                        <img src="{{asset($r->image)}}" alt="">
                        <div class="text">
                            <h3>{{ $r->title }}</h3>
                            <span>{{ date('d-F-Y',strtotime($r->created_at)) }}</span>
                            <p>{{ $r->deskripsi }}</p>
                            <hr>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-12">
                    @livewire('cek-harga')
        </div>
    </div>
    <footer>
        <div>
            E<span style="font-size:42px;font-weight : 100;"> Tukang_</span>
        </div>
    </footer>
</body>

</html>


{{-- background-image : linear-gradient(90deg,rgba(26, 20, 20, 0.938),rgba(26, 20, 20, 0.466)),url('{{asset('/img/background.jpg')}}'); --}}
