<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>I Math | Lembar Kerja</title>
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
      background-color: #f7952e;
    }
    .font-icon a:hover i {
        color:#ef4236!important;
    }
    article.entry-hover {
        background-color:#fff;
    }
    article.entry-hover:hover{
        background-color:#f7952e!important;
    }
    body {
        background-color:#fff6df;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-light bg-light fixed-top" style="background-color:#f7952e!important;  padding-bottom:5px; padding-top:5px;">
  <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
          <h1 class="font-icon"><a href="{{ route('app.index') }}"><i class="bi bi-arrow-left" style="font-size:30px; color:#fff; top:10px; position:relative;"></i></a></h1>
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
  </div>
</nav>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="top:-10px!important; position:relative;">
      <div class="container">
        <h2 class="text-center">{{ Auth::user()->name }} - {{ Auth::user()->mahasiswa->nim }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-12 mb-2">
               
              @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Sukses!</strong> {{ session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
          </div>
        </div>

        <div class="row">

          <div class="col entries">
            <a href="{{ route('lembar.kerja.pengetahuan',$materi->id) }}">
              <article class="entry unlock entry-hover" style="padding: 30px 30px 10px 30px; margin-bottom: 20px; border-radius:20px;">
                <h2 class="entry-title text-dark" style="font-size: 18px;">
                  {{$materi->judul}}
                </h2>
              </article><!-- End blog entry -->
            </a>

            @if($jawaban == 'disabled')
              <article class="entry bg-secondary" style="padding: 30px 30px 10px 30px; margin-bottom: 20px; background-color:#f7952e!important; border-radius:20px;">
                <h2 class="entry-title">
                  <div class="row text-light" style="font-size: 18px;">
                    <div class="col-10">
                      Latihan
                    </div>
                    <div class="col-2">
                      <i class="bi bi-lock-fill" ></i>
                    </div>
                  </div>
                </h2>
              </article><!-- End blog entry -->
            @else
              <a href="{{ route('lembar.kerja.latihan',$materi->latihan->id)}}">
                <article class="entry unlock" style="padding: 30px 30px 10px 30px; margin-bottom: 20px; background-color:#f7952e;  border-radius:20px;">
                  <h2 class="entry-title" style="font-size: 18px; color: #fff;">
                    Latihan
                  </h2>
                </article><!-- End blog entry -->
              </a>
            @endif


          </div><!-- End blog entries list -->

        </div>

        <div class="row">
          <div class="col">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <!-- ======= Contact Section ======= -->
              <section id="contact" class="section-bg">
                <div class="container" data-aos="fade-up">

                  <div class="section-header">
                    <h3>Nilai</h3>
                  </div>

                  <div class="row contact-info">

                    <div class="col-md-4">
                      <div class="contact-address">
                        <h3>Pengetahuan</h3>
                        <address>{{ $jawabanPengetahuan }}</address>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="contact-phone">
                        <h3>Latihan</h3>
                        <p>{{ $jawabanLatihan }}</p>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="contact-email">
                        <h3>Rata-rata</h3>
                        <p>{{ $rata2 }}</p>
                      </div>
                    </div>

                  </div>

                </div>
              </section><!-- End Contact Section -->
            </div>
          </div>
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