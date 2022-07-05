<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Tukang | {{$title}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href=" {{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>

                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                        </li>

                                        <!-- Level three dropdown-->
                                        <li class="dropdown-submenu">
                                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Level three -->

                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item  sm-3">Log-out
                            <i class=" fas fa-arrow-right"></i></button>
                    </form>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg-cyan">
            <!-- Content Header (Page header) -->
            <div class="content-header" style="color: navy ;">
                <div class="container">
                    <div class="row mb-2 ">
                        <div class="col-9 p-1">
                            <div class="card shadow-md">
                                <div class="card-header bg-gradient-fuchsia">
                                    Konten
                                </div>
                                <header class="p-2" style="height: 100vh ;background-image: url({{ asset('img/wave.png') }}); background-size:cover;">
                                    <div class="row p-2" style=" font-weight:800">
                                        <div class="col-6">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur eum dolorem incidunt quisquam provident sequi a ipsam alias aliquid! Laborum assumenda aspernatur facere velit. Hic aut provident nemo excepturi ad.
                                            Reprehenderit quod tempora, modi commodi tenetur, minima repellat sit id quos officiis distinctio quae eaque consectetur, quaerat error aliquid. Molestias officiis harum qui tempore ratione repellendus atque aspernatur reprehenderit quam.
                                            Pariatur aliquam nesciunt assumenda illum labore odio perferendis impedit natus exercitationem recusandae, saepe deserunt cum nam, at quasi, deleniti delectus fugit rerum illo! Porro quas et nam, explicabo dolorem pariatur.
                                            Voluptates porro laboriosam cumque amet pariatur sit placeat numquam eligendi distinctio. Voluptatem nulla sequi nemo officiis ut dolorum alias? Excepturi molestiae eaque tempora numquam cum illum tempore animi similique adipisci?
                                            Quibusdam dignissimos omnis nostrum ut libero saepe laborum explicabo eos facilis, iusto laudantium eum accusantium repellat delectus facere possimus sint voluptatibus reprehenderit praesentium minima, aliquam ea! Cumque sit dicta ratione.
                                        </div>
                                        <div class="col-6">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut odio officia blanditiis assumenda odit harum, facilis autem, dolores fugit sit placeat facere rerum suscipit tempora id distinctio enim laborum minus.
                                            Earum quibusdam impedit sed praesentium quaerat dolor ipsum harum. Quos, ducimus asperiores officiis ab consequatur qui est sed commodi et odit ex ipsa veniam ullam voluptas fuga autem ipsam eveniet.
                                            Ullam perferendis sapiente ex, quo sequi quis aut hic fuga voluptatum quod alias ab necessitatibus itaque suscipit? Veritatis, blanditiis ratione error fugiat veniam exercitationem molestias dolorem dolores a, natus quos.
                                            Quia mollitia voluptas distinctio tempore nobis accusantium eligendi repellat. Sint est sapiente id aliquam doloremque esse cupiditate quo ea magnam omnis, aliquid debitis inventore ab veritatis, sequi placeat, vel modi.
                                        </div>
                                    </div>
                                </header>
                                <div class="card-body text-black" style="background-image: url({{ asset('img/waveup.png') }}); image-size:cover;background-repeat: no-repeat ; ">
                                    <p class=" text-blue">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nihil eveniet non! Exercitationem omnis itaque, consequuntur nesciunt earum doloribus, atque dignissimos, facere amet animi vitae error ut eveniet voluptatem porro?
                                        At maiores eligendi nesciunt dignissimos ipsam? Alias pariatur deserunt numquam nihil fugit quod doloribus distinctio nulla eum et, blanditiis repellendus iusto inventore possimus nesciunt? Ratione tenetur molestiae exercitationem cupiditate architecto.
                                        Optio praesentium natus quia perferendis. Culpa assumenda repudiandae, cumque minus iusto ab porro quam harum dolor quia impedit dolore perferendis asperiores laborum recusandae voluptatibus aut. Placeat saepe quidem quam suscipit.
                                        Rem vero suscipit totam. Odit earum pariatur officia incidunt blanditiis in recusandae eaque, alias id exercitationem asperiores delectus excepturi praesentium cumque sint modi sit repellat molestias obcaecati ex consectetur? Cupiditate.
                                        Consequuntur dignissimos pariatur ipsam sequi assumenda explicabo in est sint sapiente voluptas beatae, reprehenderit, voluptate quisquam nam! Error beatae excepturi ex optio, impedit assumenda consequatur. Eveniet quo tempore consequatur aliquid.
                                        Cupiditate ipsam aut libero eos labore unde ea quia adipisci facilis. Omnis corporis dignissimos quae, soluta quis exercitationem itaque eveniet eum nihil sunt maxime. Itaque voluptate porro autem modi ab!
                                        Velit officia, quia quaerat fugit nam quam voluptatum placeat dolores numquam illo consequuntur, maiores pariatur, dolore harum repellat voluptatem facere? Ea optio sit similique velit at debitis hic dolores quaerat.
                                        Placeat rerum fuga amet repellat laborum deleniti. Odio commodi nobis eos sed harum quam eum aperiam reprehenderit quas quis doloribus beatae facilis maxime, quisquam dolore a blanditiis? Libero, iusto dolore?
                                        Reprehenderit, molestiae. Aut quia eaque harum est tempora enim dolore? Vero totam iure animi alias dolore, optio doloremque quam incidunt non corrupti quidem! Atque earum molestias dolor mollitia. Illum, vero.
                                        Omnis earum suscipit voluptatem fuga voluptate saepe. Expedita, doloremque? Quibusdam eveniet, molestiae harum cumque atque laborum veniam eum, a aperiam provident facilis, nostrum ab neque odit obcaecati sunt vel ut.
                                        Dolorem, sapiente. Eius in corrupti cumque? Deleniti, provident. Aperiam rem nostrum quaerat mollitia, excepturi porro quos quibusdam necessitatibus maxime aspernatur soluta sint fugit, neque, et reiciendis saepe sit voluptatem consectetur!
                                        Dignissimos iste a quo cupiditate iure sunt aperiam inventore animi, tempore delectus, et eum, qui natus dolore dicta? Incidunt natus aliquid voluptatibus repellat dolorem reprehenderit praesentium sapiente ducimus doloribus recusandae.
                                        Adipisci, error vero earum a porro rem obcaecati deleniti repellat maiores, inventore debitis esse doloremque mollitia. Cupiditate obcaecati, commodi ducimus non eius voluptas soluta numquam adipisci incidunt harum explicabo fuga!
                                        Culpa perspiciatis voluptate odio a consectetur sapiente pariatur ad esse error quas ut accusamus inventore commodi quam corrupti voluptas ducimus harum, dolorum sit assumenda molestiae et officia. Velit, enim eius.
                                        Maxime eveniet dolore fugit dignissimos voluptatum repudiandae qui soluta provident, vero exercitationem a assumenda quaerat dolores earum velit nostrum, necessitatibus fuga dolorem laudantium perferendis recusandae molestias distinctio aliquid. Atque, dicta?
                                        Velit, eos omnis pariatur ut dolorum neque ab eligendi debitis unde numquam quas explicabo magni, ea est dolorem. At non est, maiores sit reprehenderit excepturi nisi ut culpa. Cum, explicabo?
                                        Reiciendis, quidem. Est sequi architecto obcaecati aperiam dolore nisi error eaque? Odit minima corporis asperiores ipsam quas dolor, exercitationem vero a atque, quos voluptates maxime odio dolores, ducimus enim! Deserunt?
                                        Qui aut corporis possimus nulla minima eligendi. Dolore eveniet laudantium, quia cumque omnis optio voluptates praesentium mollitia impedit sunt, autem similique adipisci nesciunt reprehenderit dicta, voluptatum odit ratione ex! Tempore.
                                        Magnam, aperiam debitis laudantium aliquid officia veniam dolore distinctio similique labore! Quasi porro ex velit adipisci exercitationem at provident, sed, aut eius unde repellat enim quia dolorem est dolor? Ad?
                                        Beatae veniam dignissimos et amet? Maiores vel ad impedit, repudiandae inventore earum. Maiores rerum, ullam commodi tempore deserunt eius fugiat dolores saepe! Provident maxime ducimus quaerat, voluptatibus dolorum quia quae.
                                        Alias corporis aut harum, assumenda ab aliquid blanditiis in ullam quae similique, ea ex, veniam libero expedita enim facere et fuga maxime quos commodi? Delectus numquam voluptates blanditiis ducimus quia?
                                        A ipsa aspernatur nihil quae excepturi ad quia magni ex, numquam nisi incidunt. Sit officiis dolore, similique optio earum unde architecto consequuntur, et omnis eligendi libero fugiat impedit quasi recusandae.
                                        Suscipit incidunt est aliquam totam beatae exercitationem unde nesciunt ex magnam fuga tempora, veritatis possimus laborum reiciendis quo adipisci dicta, at harum. Nesciunt, culpa ex deserunt blanditiis illum aspernatur animi!
                                        Voluptate cum magnam aliquid fugiat, dolores fuga omnis iste ad reiciendis neque atque corporis modi unde odio pariatur eius repellat commodi architecto maiores similique adipisci. Suscipit ut quas in architecto.
                                        Dignissimos sint facilis praesentium dolores voluptates exercitationem tempora delectus eius, dolorem omnis minima. Autem possimus asperiores ratione corrupti dignissimos voluptate numquam mollitia ab? Assumenda commodi, sunt in quasi adipisci repudiandae.
                                        Aliquid modi magni, sit praesentium perferendis necessitatibus molestias, quo, molestiae aliquam suscipit commodi dolorum. Sapiente obcaecati neque aperiam cupiditate corrupti nobis quod sunt repellendus quo in. Quibusdam nisi autem temporibus.
                                        Est dolores soluta officia nihil distinctio iure expedita modi omnis facilis sint inventore, atque non, asperiores quaerat nobis laudantium aliquam animi tenetur, incidunt maxime! Iure natus impedit tenetur repudiandae sint.
                                        Debitis assumenda repellendus cupiditate est obcaecati pariatur facere recusandae reiciendis id et earum nemo porro tenetur non quo, aspernatur dolore adipisci beatae ipsam rem odit deleniti quod laborum amet. Dicta.
                                        Culpa, vero voluptas, omnis aspernatur perspiciatis error iusto incidunt itaque recusandae esse aliquid deserunt tenetur ut, fugit dolore suscipit cum mollitia voluptates laboriosam ducimus nesciunt. Recusandae totam id nemo accusantium.
                                        Architecto nobis quo expedita facere! Nemo quasi, odio, illum sunt esse perspiciatis at nulla suscipit quaerat deleniti consequatur ullam, nihil eius saepe dolor doloribus laboriosam quisquam neque accusamus provident asperiores?
                                    </p>

                                </div>

                            </div>

                        </div>
                        <div class="col-3">
                            <div class="card pb-4">
                                <div class="card-header bg-cyan">
                                    <div class="card-title text-uppercase">
                                        Menu
                                    </div>
                                </div>
                                <div class="card-body" style="color: navy ;">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            A list item
                                            <span class="badge bg-primary rounded-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            A second list item
                                            <span class="badge bg-primary rounded-pill">2</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            A third list item
                                            <span class="badge bg-primary rounded-pill">1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        @yield('konten')
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>
