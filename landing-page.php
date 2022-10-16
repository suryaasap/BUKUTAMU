<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<title>BukuTamu.com</title>
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	
</head>
<body>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
 
	<br/>
	<br/>
	<!-- Header Area Start -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- Logo -->
						<a href="index.html" class="logo">
							<b style="color: #ff6666;">tamuku</b>_IND
						</a>
						<!-- End Logo -->
						<!-- Menu Start -->
						<ul class="nav">
							<li class="scroll-to-section" class="menu-item"><a href="landing-page.php">Home</a></li>
							<li class="scroll-to-section" class="menu-item"><a href="about.html">About</a></li>
							<!--<li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a></li>
							<li class="submenu">
								<a href="javascript:;">Dropdown</a>
								<ul>
									<li><a href="" class="menu-item">About Us</a></li>
									<li><a href="" class="menu-item">Features</a></li>
									<li><a href="" class="menu-item">FAQ's</a></li>
									<li><a href="" class="menu-item">Blog</a></li>
								</ul>
							</li>-->
							<li class="scroll-to-section" class="menu-item"><a href="contact.html">Contact Us</a></li>
							<li class="scroll-to-section" class="menu-item"><a href="logout.php">LOGOUT</a></li>
						</ul>
						<a class="menu-trigger">
							<span>menu</span>
						</a>
						<!-- Menu End -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header Area End -->

	<!-- Welcome Area Start -->
	<div class="welcome-area" id="welcome">
		<!-- Header Text Start -->
		<div class="header-text">
			<div class="container">
				<div class="row">
					<div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
						<h1>Selamat Datang <em>Tamu Undangan</em></h1>
						<p><a href="#"> </a> Merupakan penyedia layanan yang memberikan pelayanan berupa jasa rekapitulasi kehadiran para tamu yang datang pada acara .<b></b>.</p>
						<a href="tambah_data.php" class="main-button-slider">Daftar Sebagai Tamu</a>
						<a href="index.php" class="main-button-slider">Lihat Tamu Lain</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Text End -->
	</div>
	<!-- Welcome Area End -->

	<!-- Features About Area Star -->
	<section class="section" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<h2>01</h2>
							<img src="assets/images/icon-1.png" alt="">
							<h4>Lihat Rowndown Acara</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="rundown.php" class="main-button">
								Read More
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<h2>02</h2>
							<img src="assets/images/icon-2.png" alt="">
							<h4>Lihat Denah Ruangan</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="denah_ruangan.php" class="main-button">
								Read More
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<h2>03</h2>
							<img src="assets/images/icon-3.png" alt="">
							<h4>Lihat pengajar</h4>
							<p>test.</p>
							<a href="pembicara.php" class="main-button">
								Read More
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features About Area End -->

	<!-- JQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/owl-carousel.js"></script>
	<script src="assets/js/scrollreveal.min.js"></script>

	<!-- Global Init -->
	<script src="assets/js/custom.js"></script>
</body>
</html>