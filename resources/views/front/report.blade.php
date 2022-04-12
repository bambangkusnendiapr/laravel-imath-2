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

          <article class="entry entry-single">
            <h2 class="entry-title">
              Report
            </h2>
            
            <div class="entry-content">
                <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Lembar Kerja</th>
                          <th>Pengetahan</th>
                          <th>Latihan</th>
                          <th>Rata-rata</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $rata2 = 0; @endphp
                        @foreach($materi as $data)
                          @php
                            $pengetahuanId = [];

                            $latihanId = null;

                            $soalId = [];
                          @endphp

                          @foreach($data->pengetahuans as $peng)
                            @php
                              $pengetahuanId[] = $peng->id;
                            @endphp
                          @endforeach   

                          @foreach($latihan->where('materi_id', $data->id) as $lat)
                            @php
                              $latihanId = $lat->id;
                            @endphp
                          @endforeach

                          @foreach($soalLatihan->where('latihan_id', $latihanId) as $soal)
                            @php
                              $soalId[] = $soal->id;
                            @endphp
                          @endforeach
                          <tr>
                            <td>{{ $data->judul }}</td>
                            <td>
                              {{ $jawabanPengetahuan->whereIn('pengetahuan_id', $pengetahuanId)->sum('nilai') }}
                            </td>
                            <td>
                            {{ $jawabanLatihan->whereIn('soal_latihan_id', $soalId)->sum('nilai') }}
                            </td>
                            <td>
                              @php $rata2 += ($jawabanPengetahuan->whereIn('pengetahuan_id', $pengetahuanId)->sum('nilai') * 0.3) + ($jawabanLatihan->whereIn('soal_latihan_id', $soalId)->sum('nilai') * 0.7); @endphp
                              {{ round(($jawabanPengetahuan->whereIn('pengetahuan_id', $pengetahuanId)->sum('nilai') * 0.3) + ($jawabanLatihan->whereIn('soal_latihan_id', $soalId)->sum('nilai') * 0.7), 2) }}
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3" class="text-end">Jumlah Rata-rata</th>
                          <th>
                            {{ round($rata2 / $materi->count(), 2) }}
                          </th>
                        </tr>
                      </tfoot>
                  </table>
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