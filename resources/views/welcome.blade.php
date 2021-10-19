<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Halaman Utama Sebelum Login | Aplikasi Kasir</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/swiper.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img') }}/favicon/laravel.ico">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html">Aplikasi Kasir</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                @auth
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ url('/home') }}">Home</a>
                </span>
                @else
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ route('login') }}">Masuk Akun</a>
                </span>
                @if (Route::has('register'))
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ route('register') }}">Daftar Akun</a>
                </span>
                @endif
                @endauth
                @endif
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">Aplikasi Kasir Laravel 8</div>
                        <h1 class="h1-large">Aplikasi Kasir</h1>
                        <p class="p-large">Jabar Coding Camp (JCC), Aplikasi Kasir (Laravel Project), Anda diminta untuk
                            membuat aplikasi kasir sederhana Kelas JCC
                            Partnership - Project Challenge (Tantangan)</p>
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/home') }}" class="btn-solid-lg">Halaman Utama</a>
                            @else
                            <a href="{{ route('login') }}" class="btn-solid-lg">Masuk Akun</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-solid-lg">Daftar Akun</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('zinc') }}/images/header-illustration.svg"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon blue">
                            <span class="far fa-file-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SB Admin 2</h5>
                            <p style="height: 150px;">Untuk Halaman Admin nya menggunakan sb admin 2 karena aturan dari
                                tantangan</p>

                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon yellow">
                            <span class="fas fa-solar-panel"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jabar Coding Camp (JCC)</h5>
                            <p style="height: 150px;">Tantangan JCC Partnership - Project Challenge, Aplikasi Kasir
                                Sederhana V1.0 (Laravel
                                Project), Anda
                                diminta untuk membuat aplikasi kasir sederhana Kelas.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <span class="fas fa-gift"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">ZINC</h5>
                            <p style="height: 150px;">Adalah Halaman Utama Dari Theme Wagon, ini adalah template yang
                                digunakan untuk membuat
                                ui halaman sebelum login dengan modifikasi beberapa fitur yang tidak dipakai.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid"
                            src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Aplikasi Kasir V1.0 Dibuat Menggunakan</span><br> Laravel 8</h2>
                        <p>Laravel adalah framework PHP yang bersifat open source dan dirancang agar proses pengembangan
                            aplikasi web menjadi lebih
                            mudah dan cepat karena berbagai fitur bawaan di dalamnya. Fitur-fitur tersebut merupakan
                            salah satu alasan mengapa
                            banyak pengembangan memanfaatkan kerangka kerja Laravel.</p>
                        <a href="https://laravel.com/docs/8.x" class="btn-solid-reg">Laravel 8 Go!!</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details Modal -->
    <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('zinc') }}/images/details-modal.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Goals Setting</h3>
                        <hr>
                        <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit
                            semper magna ac tum nico vela spider</p>
                        <h4>User Feedback</h4>
                        <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus
                            posuere nisi. Vivamus feugiat</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                            </li>
                        </ul>
                        <a id="modalCtaBtn" class="btn-solid-reg" href="#">Details</a>
                        <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of modal-content -->
        </div> <!-- end of modal-dialog -->
    </div> <!-- end of modal -->
    <!-- end of details modal -->

    <!-- Projects -->
    <div id="projects" class="filter bg-white mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Projects Me :</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <button class="button is-checked" data-filter="*">ALL</button>
                        <button class="button" data-filter=".design">DESIGN</button>
                        <button class="button" data-filter=".development">DEVELOPMENT</button>
                        <button class="button" data-filter=".marketing">MARKETING</button>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_1_Siadawa.PNG"
                                    alt="alternative">
                                <p><strong>Apps Sistem Informasi Mahasiswa Dan Penilaian Mahasiswa Siadawa
                                        (Codeigniter)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_2_Informasi_Surat.PNG"
                                    alt="alternative">
                                <p><strong>Apps Informasi Surat Sederhana (PHP Native)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_3_Akta_Tanah.PNG"
                                    alt="alternative">
                                <p><strong>Apps Akta Tanah Sederhana (PHP Native)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_4_Sidak.PNG"
                                    alt="alternative">
                                <p><strong>Apps Sidak Sederhana (PHP Native)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid"
                                    src="{{ asset('img') }}/projects/Project_5_Pendataan_Dosen_Mahasiswa.PNG"
                                    alt="alternative">
                                <p><strong>Apps Pendataan Dosen dan Mahasiswa Sederhana(PHP Native)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_6_PKL.PNG"
                                    alt="alternative">
                                <p><strong>Apps Pendataan dan Penerima Pelamar Sederhana (PHP Native)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_7_Sosial_Media.PNG"
                                    alt="alternative">
                                <p><strong>Apps Sosial Media Laravel 6 (Final Project)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_8_Laravel_Film.PNG"
                                    alt="alternative">
                                <p><strong>Apps Informasi Film Laravel 6 (Aplikasi Ini Adalah Hasil Pengerjaan Tugas
                                        Jabar Tantangan Coding Camp)</strong></p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('img') }}/projects/Project_9_Aplikasi_Kasir.PNG"
                                    alt="alternative">
                                <p><strong>Aplikasi Kasir Sederhana V1.0, Project Challenge (Laravel Project) Jabar
                                        Coding Camp (JCC)</strong></p>
                            </a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

    <div class="mt-5 mb-5"></div>

    <!-- Footer -->
    <div class="footer bg-gray mt-5">
        <img class="decoration-city" src="{{ asset('zinc') }}/images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Web Portofolio : <a href="https://ekomh170.github.io/">https://ekomh170.github.io/</a></h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray mt-5">
        <div class="container">
            <div class="row">
                <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="#">Eko Muchamad Haryono</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Distributed By: <a href="https://themewagon.com/"
                            target="_blank">ThemeWagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="{{ asset('zinc') }}/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{ asset('zinc') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('zinc') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('zinc') }}/js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('zinc') }}/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="{{ asset('zinc') }}/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
