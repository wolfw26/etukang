<!-- #232536 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=DM+Sans:wght@400;700&family=Inter:wght@400;900&family=Lato:wght@700&family=Merriweather:wght@400;700;900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,800;1,400&family=Nunito:wght@300&family=Open+Sans:wght@300;400&family=Oswald:wght@200;300;600&family=Poppins:wght@300;400;500;600;700&family=Rancho&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@500&family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('landing.css') }}" type="text/css">
    <title>E-Tukang</title>
</head>

<body>
    {{-- <div class="wrapper">
        <div class="container">
            <nav class="nav-bar">
                <div class="logo">
                    <h2>CV. CONTRAKTOR JAYA MANDIRI</h2>
                </div>
                <div class="menu">
                    <a href="#">BERANDA</a>
                    <a href="#">TENTANG</a>
                    <a href="#">HITUNG BIAYA</a>
                    <button> <a href="#"> DAFTAR</a></button>
                    <button> <a href="{{ route('login') }}"> LOGIN</a></button>
    </div>
    </nav>
    <header>
        <div class="card-header">
            <h2>JASA PEMBANGUNAN RUMAH</h2>
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia repellat iusto excepturi, officiis similique ullam iure corrupti fuga qui facilis quod quisquam ipsum, et sed quo quos vero consequatur nisi.</span>
        </div>
        <button> <a href="#">Masuk</a> </button>
    </header>
    </div>
    <div class="container">
        .
    </div>
    </div> --}}

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg  fixed-top shadow-lg">
            <div class="container d-md-flex justify-content-md-between align-items-md-center">
                <a class="navbar-brand px-md-3" href="{{ route('landing') }}">
                    <h3> E-TUKANG</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Menu" aria-controls="navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="Menu">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-md-1">
                            <a class="nav-link font-weight-bolder active" aria-current="page" href="#main">Beranda</a>
                        </li>
                        <li class="nav-item mx-md-1">
                            <a class="nav-link font-weight-bolder active" aria-current="page" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item mx-md-1">
                            <a class="nav-link font-weight-bolder active" aria-current="page" href="#proses">Proses</a>
                        </li>
                        <li class="nav-item mx-md-1">
                            <a class="nav-link font-weight-bolder active" aria-current="page" href="#kontak">Kontak</a>
                        </li>
                        <li class="nav-item mx-md-1">
                            <a class="nav-link font-weight-bolder active" aria-current="page" href="{{ route('login') }}">Masuk/Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main id="main" class="container-fluid mx-md-0 vh-100 p-md-0 bg-secondary position-relative overflow-hidden">
            <img src=" {{ asset('img/landing-page.jpg') }}" class="img-fluid main-image" alt="">
            <div class="background-overlay"></div>
            <div class="main-tagline">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center display-3">
                            HALLO, SELAMAT DATANG
                        </h2>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eius repudiandae nobis perferendis veritatis deserunt asperiores cumque perspiciatis aspernatur facere aperiam facilis nam porro, sit, officiis debitis, et repellendus vero?
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <div id="tentang" class="tentang container-fluid py-md-2 mb-md-5">
            <div class="row mt-md-3 pt-md-2 mb-md-5">
                <div class="col-12">
                    <h3 class="text-center text-main color-main">TENTANG</h3>
                </div>
            </div>
            <div id="card-tentang" class="row mt-md-4 px-md-4 d-flex justify-content-center p-md-1">
                <div class="col-md-5 col-12 mx-md-2 my-md-3 my-1">
                    <div class="card shadow-lg">
                        <div class="card-header bg-main text-main text-center">Tentang 1</div>
                        <div class="card-body">
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo distinctio ratione nihil dicta impedit temporibus ipsum eum veniam! Minus nulla at commodi aut beatae error excepturi ex! Similique, quisquam pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 mx-md-2 my-md-3 my-1">
                    <div class="card shadow-lg">
                        <div class="card-header bg-main text-main text-center">Tentang 2</div>
                        <div class="card-body">
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo distinctio ratione nihil dicta impedit temporibus ipsum eum veniam! Minus nulla at commodi aut beatae error excepturi ex! Similique, quisquam pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 mx-md-2 my-md-3 my-1">
                    <div class="card shadow-lg">
                        <div class="card-header bg-main text-main text-center">Tentang 3</div>
                        <div class="card-body">
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo distinctio ratione nihil dicta impedit temporibus ipsum eum veniam! Minus nulla at commodi aut beatae error excepturi ex! Similique, quisquam pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 mx-md-2 my-md-3 my-1">
                    <div class="card shadow-lg">
                        <div class="card-header bg-main text-main text-center">Tentang 4</div>
                        <div class="card-body">
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo distinctio ratione nihil dicta impedit temporibus ipsum eum veniam! Minus nulla at commodi aut beatae error excepturi ex! Similique, quisquam pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="proses" class=" container-fluid py-md-5 py-3">
            <div class="row my-md-5"></div>
            <div id="row-1" class="row d-md-flex justify-content-center">
                <div class="col-3">
                    <h3 class="text-main bg-main text-center rounded">
                        PROSES
                    </h3>
                </div>
            </div>
            <div id="row-1" class="row my-md-5">
                <div class="col-md-2 col-12 d-none d-md-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <h1 class="text-center color-main bg-white rounded px-md-3">----></h1>
                    </div>
                </div>
                <div class="col-md-2 col-12 my-md-0 my-2 mx-md-0 mx-2">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="text-main text-center color-main">KE-1</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur possimus nobis fugiat optio error, commodi, ratione quaerat nostrum sit excepturi cumque voluptatibus reiciendis quasi dolore. Distinctio recusandae natus perferendis?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-12 d-none d-md-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <h1 class="text-center color-main bg-white rounded px-md-3">----></h1>
                    </div>
                </div>

                <div class="col-md-2 col-12 my-md-0 my-2 mx-md-0 mx-2">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="text-main text-center color-main">KE-2</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur possimus nobis fugiat optio error, commodi, ratione quaerat nostrum sit excepturi cumque voluptatibus reiciendis quasi dolore. Distinctio recusandae natus perferendis?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-12 d-none d-md-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <h1 class="text-center color-main bg-white rounded px-md-3">----></h1>
                    </div>
                </div>

                <div class="col-md-2 col-12 my-md-0 my-2 mx-md-0 mx-2">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="text-main text-center color-main">KE-3</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur possimus nobis fugiat optio error, commodi, ratione quaerat nostrum sit excepturi cumque voluptatibus reiciendis quasi dolore. Distinctio recusandae natus perferendis?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="row-2" class="row">
                <div class="col-md-2 col-12 my-md-0 my-2 mx-md-0 mx-2">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="text-main text-center color-main">KE-6</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur possimus nobis fugiat optio error, commodi, ratione quaerat nostrum sit excepturi cumque voluptatibus reiciendis quasi dolore. Distinctio recusandae natus perferendis?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-12 d-none d-md-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <h1 class="text-center color-main bg-white rounded px-md-3"><----</h1>
                    </div>
                </div>
                <div class="col-md-2 col-12 my-md-0 my-2 mx-md-0 mx-2">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="text-main text-center color-main">KE-5</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur possimus nobis fugiat optio error, commodi, ratione quaerat nostrum sit excepturi cumque voluptatibus reiciendis quasi dolore. Distinctio recusandae natus perferendis?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-12 d-none d-md-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <h1 class="text-center color-main bg-white rounded px-md-3"><----</h1>
                    </div>
                </div>
                <div class="col-md-2 col-12 my-md-0 my-2 mx-md-0 mx-2">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="text-main text-center color-main">KE-4</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur possimus nobis fugiat optio error, commodi, ratione quaerat nostrum sit excepturi cumque voluptatibus reiciendis quasi dolore. Distinctio recusandae natus perferendis?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-12 d-none d-md-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <h1 class="text-center color-main bg-white rounded px-md-3"><----</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="kontak" class="container-fluid py-md-2 py-4 bg-main">
            <div class="row my-md-2">
                <div class="col-md-6 p-4 text-main">
                    <h4>Kontak Kami</h4>
                    <p>Email:  info@example.com</p>
                    <p>Telepon:  (123) 456-7890</p>
                    <p>Whatsapp:  0877-9878-0987</p>
                    <p>Instagram:  E-tukang_cuy</p>
                    <!-- Informasi kontak lainnya -->
                </div>
                <div class="col-md-6 p-4 text-main">
                    <h4>Data Perusahaan</h4>
                    <p>Alamat: Jl. Contoh No. 123</p>
                    <p>Kelurahan: Teluk Dalam</p>
                    <p>Kecamatan: Banjarmasin Barat</p>
                    <p>Kota: Banjarmasin</p>
                    <p>Provinsi: Kalimantan Selatan</p>
                    <!-- Informasi perusahaan lainnya -->
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src=" {{ asset('js/landing.js') }}"></script>
</body>

</html>
