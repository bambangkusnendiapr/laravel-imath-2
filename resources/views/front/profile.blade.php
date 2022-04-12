@extends('front.master')
@section('content')
<!-- ======= Header ======= -->
<!--<header id="header" class="fixed-top d-flex align-items-center" style="background-color:#f7952e;">-->
<!--  <div class="container-fluid">-->

<!--    <div class="row justify-content-center align-items-center">-->
<!--      <div class="col-xl-11 d-flex align-items-center justify-content-between">-->
<!--        <h1 class="logo"><a href="{{ route('app.index') }}">I-Math</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<!--        <nav id="navbar" class="navbar">-->
              
<!--            <ul>-->
<!--            <li><a class="nav-link scrollto" href="{{ route('logout')}}">About Me</a></li>-->
<!--            <li><a class="nav-link scrollto" href="{{ route('logout')}}">Report Nilai</a></li>-->
<!--            <li><a class="nav-link scrollto" href="{{ route('profile') }}">Profil</a></li>-->
<!--              <li><a class="nav-link scrollto" href="{{ route('logout')}}">Logout</a></li>-->
<!--            </ul>-->
<!--            <i class="bi bi-list mobile-nav-toggle"></i>-->
<!--          </nav><!-- .navbar -->-->
<!--      </div>-->
<!--    </div>-->

<!--  </div>-->
<!--</header><!-- End Header -->-->

<nav class="navbar navbar-light bg-light fixed-top" style="background-color:#f7952e!important;  padding-bottom:10px;">
  <div class="container-fluid">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('app.index') }}">
            
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

        @error('password')
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ $message }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @enderror

        @if (session()->has('success'))  
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> {{ session('success')}}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

          <article class="entry">
            <h2 class="entry-title">
              Profile
            </h2>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Gambar</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Ganti Password</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active p-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form action="{{ route('profile.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  @if(Auth::user()->gambar)
                  <img src="{{ asset('img/'.Auth::user()->gambar) }}" class="img-thumbnail" alt="Mahasiswa" width="200px">
                  @else
                    <img src="{{ asset('img/mhs.jpg') }}" class="img-thumbnail" alt="Mahasiswa" width="200px">
                  @endif
                  <div class="mb-3 mt-3">
                    <label for="formFile" class="form-label">Ganti Gambar</label>
                    <input required class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile" name="gambar">
                    @error('gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan Gambar</button>
                </form>
              </div>
              <div class="tab-pane fade p-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="{{ route('profile.password', Auth::user()->id) }}" method="post">
                  @csrf
                  @method('put')
                  <div class="mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="password-confirm" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Konfirmasi Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan Password</button>
                </form>
              </div>
            </div>
          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection

@push('style')
body {
        background-color:#fff6df;
    }
@endpush