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
                    <a class="badge  badge-pill badge-warning"  style="text-decoration : none; font-weight : 50;" href="/login">MASUK</a>
                {{-- </button> --}}
                {{-- <p class="arab">>بسم الله الرحمن الرحيم --}}

                {{-- </p> --}}
            </div>

        </div>
    </div>
    <section class="about" id="about">
        <div class="deskripsi">
            <h2>Tentang Kami</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quam cumque esse nam! Explicabo quaerat expedita fuga temporibus, ex sequi laboriosam dolore delectus accusantium adipisci! Maiores cupiditate praesentium exercitationem repellat?Eveniet sit, natus at consequuntur dolor animi cum aut? Quod iusto, libero natus a, consequuntur fugiat laboriosam tenetur exercitationem eius cumque eveniet perferendis eligendi aliquam voluptas quaerat porro dolor vel?
            </p>

            <button class="button_login_2"> <a style="text-decoration : none; font-weight : 100;" href="/login">LIHAT LEBIH LANJUT</a></button>
        </div>
        <div class="gambar">
            <img src="{{asset('img/landing.jpg')}}" alt="landing.jpg" class="img">

        </div>
    </section>
    <section class="news" id="news">
        <h2>Hasil Pekerjaan Kami</h2>
        <div class="services-cards">
            <div class="services-card">
                <img src="{{asset('img/alat.jpg')}}" alt="">
                <div class="text">
                    <h3>Daily Scrum Meeting</h3>
                    <span>Nov 18 2018</span>
                    <p>In Scrum, on each day of a sprint, the team holds a daily scrum meeting called the “daily scrum.” Meetings are typically held in the same location and at the same time each day.</p>
                    <hr>
                </div>
            </div>
            <div class="services-card">
                <img src="{{asset('img/batik-wayang.png')}}" alt="">
                <div class="text">
                    <h3>We Need an Intervention</h3>
                    <span>Nov 19 2018</span>
                    <p>Intervention is a powerful tool families can use to help their addicted love one enter treatment. The ultimate goal is to get the person to begin treatment for the addiction.</p>
                    <hr>
                </div>
            </div>
            <div class="services-card">
                <img src="{{asset('img/laptop.jpg')}}" alt="">
                <div class="text">
                    <h3>Will Marketers Answer?</h3>
                    <span>Nov 20 2018</span>
                    <p>How are your contacts trending month over month? Was the time you spent creating social media graphics for that campaign worth it? And what about your email marketing efforts?</p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div>
            E<span style="font-size:42px;font-weight : 100;"> Tukang_</span>
        </div>
    </footer>
</body>

</html>


{{-- background-image : linear-gradient(90deg,rgba(26, 20, 20, 0.938),rgba(26, 20, 20, 0.466)),url('{{asset('/img/background.jpg')}}'); --}}
