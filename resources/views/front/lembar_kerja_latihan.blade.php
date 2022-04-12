<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>I Math | Lembar Kerja Latihan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/logo.png')}}" rel="icon">
  <link href="{{ asset('img/logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
   <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
      img {
          max-width: 100%;
      }
      a:hover{
        color:#f7952e!important;
    }
       .font-icon a:hover i {
        color:#ef4236!important;
    }
     div.note-toolbar{
        display:none!important;
    }
    
        /*camera function*/
    .buttonCapture{
    	display: flex;
    	justify-content: center;
    }
    
    #camera, #camera--view, #camera--sensor, #camera--output{
        position: fixed;
        left: 0; top: 0;
        height: 100vh;
        width: 100vw;
        object-fit: cover;
        z-index:998;
        overflow: hidden;
    
    }
    
    #camera--trigger {
        border : 4px solid white;
        width: 50px;
        height: 50px;
        border-radius: 30px;
        padding: 5px;
        box-sizing : border-box;
        text-align: center;
        box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
        position: fixed;
        left : calc(50% - 25px);
        bottom : 50px;
       z-index: 999;
        cursor:pointer;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    }
    .cameraTrigger{
        
        background-color: white;
        width: 100%;
        height: 100%;
        border-radius: 30px;
        border: none;
    }
    
    
    #camera--trigger:active .cameraTrigger{
         transform: scale(0.87);
    }
    
    #camera--output {
      width:90%;
      height:90%;
      background : white no-repeat cover center;
      border: solid 2px white;
      border-radius: 15px;
        top: 50%;
        left: 50%;
        transform : translate(-50%,-50%);
    }
    
    .taken{
        background-size: contain;
        background-position:center;
        background : white no-repeat  center;
      
        width:95%!important;
        height:95%!important;
        transition: all 0.5s ease-in;
        border: solid 2px white;
        border-radius: 15px;
        box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
        top: 50%;
        left: 50%;
        transform : translate(-50%,-50%);
        z-index: 3;
    
        position: relative;
    }
    
    #back-camera{
      width : 30px;
  height : 30px;
  background : white;
  border-radius: 50%;
  margin : 10px;
  display : flex; justify-content:center; align-items:center;
  float:right;
  cursor:pointer;
    }
    #back-camera span {
      font-size: 25px;
      font-weight: bold;
      transform: rotate(45deg);
    }
    
    #save-capture{
      width : 100px;
      height : 40px;
      background : orange;
      border-radius: 20px;
      cursor:pointer;
      position: absolute;
        left : calc(50% - 50px);
        bottom : 20px;
      display : flex; justify-content:center!important; align-items:center!important;
      transform-origin: center;
    }
    
    
    #camera--glith {
      width:100vw;
      height:100vh;
      position:fixed;
      left: 0;
      top:0;
      z-index: 1;
      background : white;
      opacity: 0;
    
      
    }
    
    .cameraGlith {
      animation: glith 2s ease;
    }
    
    @keyframes  glith {
       0%    { opacity: 1; }
      20%   { opacity: 0; }
      80%   { opacity: 1; }
      90%   { opacity: 0; }
      100%  { opacity: 0; }
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <nav class="navbar navbar-light bg-light fixed-top" style="background-color:#f7952e!important;  padding-bottom:5px; padding-top:5px;">
  <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
          <h1 class="font-icon"><a href="{{ route('lembar.kerja', $materi_id) }}"><i class="bi bi-arrow-left" style="font-size:30px; color:#fff; top:10px; position:relative;"></i></a></h1>
          </div>
          
  
  <div class="dropdown ms-auto">
      <div class="dropdown-toggle" style="margin-right:40px; margin-top:-2px; border:none!important;" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
        @if(Auth::user()->gambar)
            <img src="{{ asset('img/'.Auth::user()->gambar) }}" class="" style="border-radius: 50%" alt=""  width="50" height="50">
          @else
            <img src="http://imath.my.id/front/assets/img/mhs.png" class="" alt=""  width="50" height="50">
          @endif
      </div>
      <ul class="dropdown-menu" style="margin-left:-90px; margin-top:10px; box-shadow:1,1,1,1.5 black; " aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
        <li><a class="dropdown-item" href="{{ route('about') }}">About</a></li>
        <li><a class="dropdown-item" href="{{ route('report') }}">Report</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="top:-10px!important; position:relative;">
      <div class="container">
        <h2 class="text-center">{{ Auth::user()->name }} - {{ Auth::user()->mahasiswa->nim }}</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        
        <div class="row">
          <div class="col-8">
            @if (session()->has('error'))    
                <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                    <span>×</span>
                    </button>
                    {{ session('error')}}
                </div>
                </div>
            @endif
          </div>
        </div>

        <div class="row">

          <div class="col entries">

            <article class="entry entry-single">
              <h2 class="entry-title">
                <a href="#">latihan</a>
              </h2>
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

        </div>

        <form action="{{ route('jawaban-latihan.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="materi_id" value="{{ $materi_id }}">
          <div class="row">
              <div class="col">
                <div class="accordion" id="accordionExample">
                @php $iterasi = 0; $jumlah = $soals->count(); @endphp
                @foreach ($soals as $soal)
                  @php $iterasi++; @endphp
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading{{ $soal->id }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $soal->id }}" aria-expanded="true" aria-controls="collapse{{ $soal->id }}">
                          Latihan {{ $iterasi }}
                        </button>
                      </h2>
                      <div id="collapse{{ $soal->id }}" class="accordion-collapse collapse {{ $iterasi == 1 ? 'show':'' }}" aria-labelledby="heading{{ $soal->id }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          {{$soal->soal}}
                          
                          <div class="form-group mt-3">
                           <input type="hidden" name="soal_id[]" class="form-control" value="{{$soal->id}}">
                          <textarea class="form-control summernote note" name="jawaban[]" autofocus></textarea>
                          <div class="mt-5 content-edit d-flex align-items-end position-relatif">
                              
                              <div class="cameraDesktop" style="display:none; position:absolute; right:50px;">
                                <i class="fas fa-camera" style="cursor:pointer; font-size:35px;"></i>
                              </div>
                              
                              <div class="cameraHp" style=" display:none; position:absolute; right:50px;">
                                  <label>
                                    <i class="fas fa-camera" style="cursor:pointer; font-size:35px;"></i>
                                    <input style="visibility:hidden; width:0;height:0;" class="captureHp" type="file" capture="environment" />
                                  </label>
                              </div>
                              
                        </div>
                        
                        @if($iterasi == $jumlah)
                          <hr>
                          <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send"></i> Kirim Jawaban</button>
                        @endif
                      </div>
                          
                        </div>
                      </div>
                    </div>
                @endforeach
                </div>
              </div>
          </div>
        </form>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!--Camera Function-->
    <div id="capturePages" hidden>
    	<canvas id="camera--sensor"  ></canvas>
    	<video id="camera" playsinline autoplay></video>
    
    	<!-- Camera trigger -->
    	<div id="camera--trigger">
    	  <div class="cameraTrigger"></div>
    	</div>
    
    	<!-- Camera output -->
    	<div id="camera--output" style="visibility:hidden;">
    	  <div id="back-camera" class="flex align-items-center justify-content-center" >
    	  	<span>+</span>
    	  </div>
    
    	  <div id="save-capture" class="flex align-items-center justify-content-center">
    	  	<span>Upload</span>
    	  </div>
    	</div>
    
    	<!-- glitch effect -->
    	<div id="camera--glith" ></div>
    </div>
    <!--End Camera Function-->

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

<script>
    $(document).ready(function() {
      $('.summernote').summernote();
    });
  </script>
  
  <script>
    	const video = document.querySelector('#camera'),
    	cameraOutput = document.querySelector("#camera--output"),
        cameraSensor = document.querySelector("#camera--sensor"),
        cameraTrigger = document.querySelector("#camera--trigger"),
        backCamera = document.querySelector("#back-camera"),
        savePicture = document.querySelector("#save-capture"),
        cameraGlith = document.querySelector("#camera--glith");
    
    	var uriImages; //data images yang akan di upload
        var indexNote = 0; //index array images
        
        
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            var btnCapture = document.querySelectorAll('.cameraHp');
            var capture = document.querySelectorAll(".captureHp");
            btnCapture.forEach((item, index) => { // here
                item.style.display = "block";
                
               capture[index].onchange =  evt =>{
                    indexNote = index;
                    console.log(indexNote);
                    
                    const [file] = capture[index].files
                    if (file) {
                        camFile(URL.createObjectURL(file));
                    }
                }
            });
        }else{
            var btnCapture = document.querySelectorAll('.cameraDesktop');
            btnCapture.forEach((item, index) => { // here
                item.style.display="block";
                
                item.onclick =  evt =>{
                    indexNote = index;
                    console.log(indexNote);
                    
                    tocapture();
                }
            });
        }
        
        //open camera in android
        function camFile (file) {
            let html = $('.summernote:eq('+indexNote+')').summernote('code'); 
            $('.summernote:eq('+indexNote+')').summernote('code', html + '<img src="' + file + '"/>');
    	}
        
    	
        //open camera in desktop
    	const constraints = {
    	  audio: false,
    	  video: { facingMode: ( "environment") }
    	};
    
    	function handleSuccess(stream) {
    	  window.stream = stream; // make stream available to browser console
    	  video.srcObject = stream;
    	  
    	}
    
    	function handleError(error) {
    	  console.log('navigator.MediaDevices.getUserMedia error: ', error.message, error.name);
    	}
    
    	function tocapture(){
    	    
    		navigator.mediaDevices.getUserMedia(constraints).then(handleSuccess).catch(handleError);
    		
    		
    		document.querySelector("#capturePages").hidden = false;
    		
    		document.querySelector("nav").hidden = true;
    		
    		document.querySelector("body").style.overflow = "hidden";
    	}
    
    
    	backCamera.onclick = function() {
    	    cameraTrigger.style.visibility = 'visible';
    	    cameraOutput.style.visibility = 'hidden';
    	    cameraOutput.style.backgroundImage = 'url("")';
    	    cameraOutput.classList.remove("taken");
    	    console.log('p');
    	}
    
    	cameraTrigger.onclick = function() {
    	    var cameraViews = document.querySelectorAll("video");
    	  var cameraView = cameraViews[cameraViews.length-1];
    	    
    	    cameraOutput.classList.remove("taken");
    	    cameraGlith.classList.remove("cameraGlith");
    	    cameraSensor.hidden = false;
    	    cameraSensor.width = cameraView.videoWidth;
    	    cameraSensor.height = cameraView.videoHeight;
    	    cameraSensor.getContext("2d").drawImage(cameraView, 0, 0);
    	    
    	    cameraGlith.classList.add("cameraGlith");
    	    cameraTrigger.style.visibility = 'hidden';
    	    cameraSensor.hidden = true;
    	  
    	  var canvas = cameraSensor,
    	        ctx = canvas.getContext("2d");
    	    
    	  var width = window.innerWidth,height = window.innerHeight;
    	  // set internal canvas size to match HTML element size
    	  canvas.width = width;
    	  canvas.height = height;
    
    	    var vratio = (canvas.height / cameraView.videoHeight) * cameraView.videoWidth;
    	    var hratio = (canvas.width / cameraView.videoWidth) * cameraView.videoHeight;
    
    	    var x = canvas.width/2 - vratio/2 ;
    	    var y = canvas.height/2 - hratio/2 ;
    
    	    if ( width > height ){
    	        ctx.drawImage(cameraView, 0,y, canvas.width,hratio);
    	    }else{
    	        ctx.drawImage(cameraView, x ,0, vratio,canvas.height);
    	    }
    	  
    	    var dataURL = canvas.toDataURL();
    	    uriImages = dataURL;
    
    	    cameraOutput.style.visibility = 'visible';
    	    cameraOutput.classList.add("taken");
    	    cameraOutput.style.backgroundImage = 'url('+dataURL+')';
    
    	     /* var a = document.createElement('a');
    	      a.href = b64;
    	      a.download = "myCapture.png";
    	      document.body.appendChild(a);
    	      a.click();
    	      document.body.removeChild(a)*/
    	};
    
    
    	savePicture.onclick = function() {
    	   // var a = document.createElement('a');
    	   //   a.href = uriImages;
    	   //   a.download = "myCapture.png";
    	   //   document.body.appendChild(a);
    	   //   a.click();
    	   //   document.body.removeChild(a)
    	   
    	   //$('.summernote:eq(0)').summernote('code', '<img src="data:image/png;'+uriImages+'>');
    	   
    	   // getting old html 
            let html = $('.summernote:eq('+indexNote+')').summernote('code'); 
            
            // setting updated html with image url
            $('.summernote:eq('+indexNote+')').summernote('code', html + '<img src="' + uriImages + '"/>');
    
    		window.stream.getTracks().forEach(function(track) {
    		  track.stop();
    		});
    		backCamera.onclick();
    		document.querySelector("#capturePages").hidden = true;
    		
    		document.querySelector("nav").hidden = false;
    		
    		document.querySelector("body").style.overflow = "auto";
    
    	}
    
    </script>
</body>

</html>