<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tugas Praktikum 13</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ url('lp/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('lp/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Uci's Laboratory</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
            <li class="sidebar-nav-item"><a href="#about">About</a></li>
            <li class="sidebar-nav-item"><a href="#services">Services</a></li>
            <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
            <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
            <li class="sidebar-nav-item">
                <div
                    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </li>
        </ul>
    </nav>
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">Uci's Laboratory</h1>
            <h3 class="mb-5"><em>Tugas Praktikum 13</em></h3>
            <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                    <p class="lead mb-5">
                        This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
                        <a href="https://unsplash.com/">Unsplash</a>
                        !
                    </p>
                    <a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Map-->
    <div class="map" id="contact">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.72929591712347!2d106.80949232427196!3d-6.442873224289872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e98cd2abc5b7%3A0x464831ee8d45c951!2sJl.%20Setapak%20No.43%2C%20RT.4%2FRW.6%2C%20Pd.%20Jaya%2C%20Kec.%20Cipayung%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016438!5e0!3m2!1sid!2sid!4v1687276315936!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3"
                        href="https://www.facebook.com/muhammad.r.putra.5876" target="blank"><i
                            class="icon-social-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3"
                        href="https://www.linkedin.com/in/muhammad-rifky-syahputra-985358211/" target="blank"><i
                            class="icon-social-linkedin"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/UciGang" target="blank"><i
                            class="icon-social-github"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Muhammad Rifky Syahputra 2023</p>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('lp/js/scripts.js') }}"></script>
</body>

</html>
