<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="{{url('/home')}}">Filateli Run</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{url('/home')}}">Home</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{url('/kategori')}}">Kategori Lari</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{url('/periode_range')}}">Periode Perlombaan</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{url('/paket_perlombaan')}}">Paket Perlombaan</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{url('/pembayaran')}}">Pembayaran</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{url('/donasi')}}">Donasi</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{url('/pendaftaran')}}">Pendaftaran</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1">Filateli Run</h1>
            <h3 class="mb-5">
                <em>Lari sambil berdonasi</em>
            </h3>
            <a href="/login" class="btn btn-xl btn-primary">Gabung Sekarang</a>
        </div>
        <div class="overlay"></div>
    </header>


    @yield('container')


    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!">
                        <i class="icon-social-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!">
                        <i class="icon-social-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="#!">
                        <i class="icon-social-github"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Filateli Run 2021</p>
        </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>