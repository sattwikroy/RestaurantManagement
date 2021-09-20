<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('welcome/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('welcome/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('welcome/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  @stack('css')

  <!-- Template Main CSS File -->
  <link href="{{ asset('welcome/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container text-right">
      <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </ul>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}"><span>KolkataFala</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('/') }}#hero">Home</a></li>
          <li><a href="{{ url('/') }}#about">About</a></li>
          <li><a href="{{ url('/') }}#menu">Menu</a></li>
          <li><a href="{{ url('/') }}#specials">Specials</a></li>
          <li><a href="{{ url('/') }}#events">Events</a></li>
          <li><a href="{{ url('/') }}#chefs">Chefs</a></li>
          <li><a href="{{ url('/') }}#gallery">Gallery</a></li>
          <li><a href="{{ url('/') }}#contact">Contact</a></li>

          <li class="book-a-table text-center">
            @if(Request::is('home'))
              <a href="{{ route( 'reservation.form') }}">Book a table</a>
            @else
              <a href="{{ route( 'home') }}">DASHBOARD</a>   
            @endif   
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>

  <!-- End Header -->

            @yield('content')
    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3><span style="color: white">Kolkata</span>Fala</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="welcome/assets/vendor/jquery/jquery.min.js"></script>
  <script src="welcome/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="welcome/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="welcome/assets/vendor/php-email-form/validate.js"></script>
  <script src="welcome/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="welcome/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="welcome/assets/vendor/venobox/venobox.min.js"></script>
  <script src="welcome/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="welcome/assets/js/main.js"></script>
  @stack('scripts')
</body>

</html>