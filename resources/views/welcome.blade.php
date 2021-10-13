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
    <title>Halaman Utama | Aplikasi Kasir</title>

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
                        <p class="p-large">Jabar Coding Camp (JCC), Aplikasi Kasir (Laravel Project), Anda diminta untuk membuat aplikasi kasir sederhana Kelas JCC
                        Partnership - Project Challenge (Tantangan)</p>
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/home') }}" class="btn-solid-lg">Home</a>
                            @else
                            <a href="{{ route('login') }}" class="btn-solid-lg">Log in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-solid-lg">Register</a>
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
                            <h5 class="card-title">Landing page</h5>
                            <p>Lorem ipsum dolor sit amet, consect adipiscing elit nulla id nisl blah nor</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Ut tincidunt vitae enim non vehi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Phasellus vitae metus in felis</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Fusce pulvinar eu mi ac molestie</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Curabitur consequat nisl eget</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon yellow">
                            <span class="fas fa-solar-panel"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Corporate site</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <span class="fas fa-gift"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Online shop</h5>
                            <p>Nullam lobortis porta diam, vitae dictum metus placerat luctus bora</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Sed laoreet blandit mollis ne</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Mauris non luctus est quisquerm</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Mattis dapibus quisque tristique</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Cursus lacus interdum sollicdn</div>
                                </li>
                            </ul>
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
                        <img class="img-fluid" src="{{ asset('zinc') }}/images/details-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Perfect solution</span><br> for your small business</h2>
                        <p>Maecenas fringilla quam posuere, pellentesque est nec, gravida turpis. Integer vitae mollis
                            felis. Integer id quam id tellus hendrerit laciniad binfer</p>
                        <p>Sed id dui rutrum, dictum urna eu, accumsan turpis. Fusce id auctor velit, sed viverra dui
                            rem dina</p>
                        <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Modal</a>
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


    <!-- Details 2 -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Awesome websites</span><br> built with tons of love</h2>
                        <p>In gravida vitae nulla vitae tincidunt imperdiet ante. Pellentesque aliquet mi eu tortor
                            dictum, non imperdiet ante viverra. Phasellus eget enim orci flig rine bilo</p>

                        <!-- Counter -->
                        <div class="counter-container">
                            <div class="counter-cell">
                                <div data-purecounter-start="0" data-purecounter-end="1250"
                                    data-purecounter-duration="2" class="purecounter">1</div>
                                <div class="counter-info">Happy Customers</div>
                            </div> <!-- end of counter-cell -->
                            <div class="counter-cell red">
                                <div data-purecounter-start="0" data-purecounter-end="1380"
                                    data-purecounter-duration="2" class="purecounter">1</div>
                                <div class="counter-info">Issues Solved</div>
                            </div> <!-- end of counter-cell -->
                        </div> <!-- end of counter-container -->
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('zinc') }}/images/details-2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of details 2 -->


    <!-- Projects -->
    <div id="projects" class="filter bg-white mb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Projects that we're proud of</h2>
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
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-1.jpg" alt="alternative">
                                <p><strong>Online banking</strong> - pellentesque tincidunt leo eu laoreedt integer quis
                                    vanos compren</p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-2.jpg" alt="alternative">
                                <p><strong>Loans company</strong> - odio semper, interdum orci molestie, mattis lectus
                                    pellentesq aliqu</p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-3.jpg" alt="alternative">
                                <p><strong>Refinance firm</strong> - arcu a neque congue finibus doneci malesuada et
                                    purus melan bris</p>
                            </a>
                        </div>
                        <div class="element-item design development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-4.jpg" alt="alternative">
                                <p><strong>Financial products</strong> - id aliquam ut malesuada eros utr varius blandit
                                    aliquam tinci bist</p>
                            </a>
                        </div>
                        <div class="element-item design development">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-5.jpg" alt="alternative">
                                <p><strong>Credit cards</strong> - magna a feugiat cras a semper tellus in rhoncus
                                    vehicula tellus rugo</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-6.jpg" alt="alternative">
                                <p><strong>Software robots</strong> - vel sodales dolor donec a est sapien integer
                                    pharetr bilom conva</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-7.jpg" alt="alternative">
                                <p><strong>Company control</strong> - ut quam aliquam elemo de vestibulum fringilla
                                    porttitor vanic tres</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-8.jpg" alt="alternative">
                                <p><strong>Audit reports</strong> - sed tempor, metus vel pharetra finibus, est ante
                                    hendrerit augue</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="{{ asset('zinc') }}/images/project-9.jpg" alt="alternative">
                                <p><strong>Big business</strong> - aliquam semper molestie nisi, at porttitor lacus
                                    suscipit in mole richter</p>
                            </a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

    <!-- Footer -->
    <div class="footer bg-gray mt-6">
        <img class="decoration-city" src="{{ asset('zinc') }}/images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci
                        ut pellentes troc</h4>
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
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="article.html">Article Details</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="#">Your name</a></p>
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
