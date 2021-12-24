<!doctype html>
<html lang="en">
  <head>
  	<title>MVC PKL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	</head>
	<body>
	
	<div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/bg_3.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Silakan Di Klik</a></h1>
              <ul>
                <li class="active"><a href="{{ route('gur.index') }}"><span>Daftar Guru</span></a></li>
                <li class="active"><a href="{{ route('sisw.index') }}"><span>Daftar Siswa</span></a></li>
                <li class="active"><a href="{{ route('karya.index') }}"><span>Daftar Karyawan</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
      	<div class="container">
	        <div class="colorlib-navbar-brand">
	          <a class="colorlib-logo" href="index.html"></a>
	        </div>
	        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        </div>
      </header>

      <section class="hero-wrap js-fullheight">
	      <div class="container px-0">
	        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-12 ftco-animate text-center">
	          	<div class="desc">
		            <h1>DAFTAR STAFF SEKOLAH</h1>
		            <h3>Klik Di Pojok Kiri Atas Untuk Melihat Dan Megkonfigurasi Daftar Info Staff Sekolah.</h3>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

    </div>
  </div>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>

