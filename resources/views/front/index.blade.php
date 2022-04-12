<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>I Math</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/logo.png')}}" rel="icon">
  <link href="{{ asset('img/logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .unlock:hover {
      background-color: lightgreen!important;
    }
    body {
        background-color:#fff6df;
    }
    article.entry-hover {
        background-color:#fff;
    }
    article.entry-hover:hover{
        background-color:#f7952e!important;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <!--<header id="header" class="fixed-top d-flex align-items-center " style="background-color:#f7952e!important;">-->
  <!--  <div class="container-fluid">-->

  <!--    <div class="row justify-content-center align-items-center">-->
  <!--      <div class="col-xl-11 d-flex align-items-center justify-content-between">-->
  <!--        <h1 class="logo"><a href="#">I-Math</a></h1>-->
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <!--        <nav id="navbar" class="navbar">-->
              
  <!--          <ul>-->
  <!--          <li><a class="nav-link scrollto" href="{{ route('logout')}}">About Me</a></li>-->
  <!--          <li><a class="nav-link scrollto" href="{{ route('logout')}}">Report Nilai</a></li>-->
  <!--          <li><a class="nav-link scrollto" href="{{ route('logout')}}">Profil</a></li>-->
  <!--            <li><a class="nav-link scrollto" href="{{ route('logout')}}">Logout</a></li>-->
  <!--          </ul>-->
  <!--          <i class="bi bi-list mobile-nav-toggle"></i>-->
  <!--        </nav><!-- .navbar -->-->
  <!--      </div>-->
  <!--    </div>-->

  <!--  </div>-->
  <!--</header><!-- End Header -->-->
  
  <nav class="navbar navbar-light bg-light fixed-top" style="background-color:#f7952e!important;  padding-bottom:10px;">
  <div class="container-fluid">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="http://imath.my.id/front/assets/img/logos.png" class="position-absolute" alt=""  width="50" height="50" style="margin-top:65px; border-radius:50%; background-color:white; padding:10px;" >
        </a>
    </div>
    
    <div class="dropdown ms-auto">
      <div class="dropdown-toggle" style="margin-right:40px; margin-top:-2px; border:none!important;" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
        @if(Auth::user()->gambar)
            <img src="{{ asset('img/'.Auth::user()->gambar) }}" class="" style="border-radius: 50%" alt=""  width="50" height="50">
          @else
            <img src="http://imath.my.id/front/assets/img/mhs.png" class="" alt=""  width="50" height="50">
          @endif
      </div>
      <ul class="dropdown-menu" style="margin-left:-110px; margin-top:10px; box-shadow:1,1,1,1.5 black; " aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
        <li><a class="dropdown-item" href="{{ route('about') }}">About</a></li>
        <li><a class="dropdown-item" href="{{ route('report') }}">Report</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
      </ul>
    </div>
  
    <!--<button class="navbar-toggler ms-auto" style="margin-top:-10px; border:none!important;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">-->
    <!--   <img src="http://imath.my.id/front/assets/img/logos.png" class="" alt=""  width="70" height="70">-->
    <!--</button>-->
    <!--<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">-->
    <!--  <div class="offcanvas-header">-->
    <!--    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>-->
    <!--    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
    <!--  </div>-->
    <!--  <div class="offcanvas-body">-->
    <!--        <a class="nav-link text-dark" href="{{ route('logout')}}">Profile</a>-->
    <!--        <a class="nav-link text-dark" href="{{ route('logout')}}">About App</a>-->
    <!--        <a class="nav-link text-dark" href="{{ route('logout')}}">Report</a>-->
    <!--        <a class="nav-link text-dark" href="{{ route('logout')}}">Logout</a>-->
    <!--  </div>-->
    <!--</div>-->
  </div>
</nav>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="top:-30px!important; position:relative;">
      <div class="container">
        <h2 class="text-center">{{ Auth::user()->name }} - {{ Auth::user()->mahasiswa->nim }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col entries">

          @php $decre = $materis->count() + 1; @endphp
          @foreach ($materis as $materi)
            @php $decre--; @endphp
            @if($materi->tgl_aktif <= \Carbon\Carbon::now()->addDays(1)->format('Y-m-d'))
            <a href="{{ route('lembar.kerja',$materi->id)}}" >
              <article class="entry unlock entry-hover" style="padding: 10px 30px 0px 30px; margin-bottom: 20px; border-radius:20px;" >
                <h2 class="entry-title mt-3" >
                  <div class="row text-dark" style="font-size: 18px;" >
                    <div class="col-1">
                      {{ $decre }}|
                    </div>
                    <div class="col-9">
                      {{$materi->judul}}
                      <br>
                      <p style="font-size: 14px; color: #579df7;">{{ $materi->tgl_aktif }}</p>
                    </div>
                  </div>
                </h2>
              </article><!-- End blog entry -->
            </a>
            @else
              <article class="entry bg-secondary" style="padding: 10px 30px 0px 30px; margin-bottom: 20px; background-color:#f7952e!important; border-radius:20px;" >
                <h2 class="entry-title mt-3">
                  <div class="row text-light" style="font-size: 18px;">
                    <div class="col-1">
                      {{ $decre }}|
                    </div>
                    <div class="col-9">
                      {{$materi->judul}}
                      <br>
                      <p style="font-size: 14px; color: #579df7;">{{ $materi->tgl_aktif }}</p>
                    </div>
                    <div class="col-2">
                      <i class="bi bi-lock-fill"></i>
                    </div>
                  </div>
                </h2>
              </article><!-- End blog entry -->
            @endif
          @endforeach

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('front/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>

</html>