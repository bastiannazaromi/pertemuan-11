<!DOCTYPE html>
<html lang="en">

<head>
	<!-- ... Head Section ... -->
	<title>Portfolio Bootstrap 4</title>

	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<link rel="stylesheet" href="assets/custom/style.css">
</head>

<body>
	<!-- Header Start -->
	<header class="fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light new-bg-secondary">
			<div class="container">
				<a class="navbar-brand" href="#home">
					<img src="assets/img/bn.png" alt="BN" width="100" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="nav-menu">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#home">Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#about">Tentang Saya</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#berita">Berita</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header End -->

	<!-- Hero Section Start -->
	<section id="home" class="new-bg-secondary pt-5 pb-5">
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-8">
					<h4 class="new-text-primary font-weight-bold mb-4">
						Halo Semua 👋, Saya
						<h2><span class="text-dark">
								Bastian Nazaromi</span></h2>
					</h4>
					<h2 class="text-dark mb-4">
						Web Developer |
						<span class="new-text-secondary">IoT Developer</span>
					</h2>
					<p class="mb-4 new-text-secondary">
						Belajar pemrograman itu mudah dan menyenangkan
						bukan.
						<span class="font-weight-bold text-dark">Bukan!</span>
					</p>
					<a href="#contact" class="btn new-btn-primary rounded-pill font-weight-bold py-3 px-4 text-white">
						Hubungi Saya
					</a>
				</div>
				<div class="col-lg-4 mt-4 mt-lg-0">
					<div class="position-relative">
						<img src="assets/img/zlatan.png" alt="Zlatan Ibrahimovic" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section End -->

	<!-- About Section Start -->
	<section id="about" class="pt-5 pb-5 bg-white">
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="mb-10 col-lg-6">
					<h4 class="text-bold mb-3 text-lg uppercase new-text-primary">
						Tentang Saya
					</h4>
					<h2 class="mb-4 max-w-md text-3xl font-bold text-dark">
						Yuk, belajar bersama saya!
					</h2>
					<p class="max-w-xl text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum similique tempora modi velit exercitationem! Libero, odio.
					</p>
				</div>
				<div class="col-lg-6">
					<h3 class="mb-4 text-2xl font-semibold text-dark mt-5">
						Mari Berteman
					</h3>
					<p class="mb-6 text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora eligendi, delectus dolor laudantium nobis incidunt repellat est reprehenderit!
					</p>
					<div class="d-flex">
						<a href="https://youtube.com/@maykomputer5117" target="_blank" class="mr-3 btn new-btn-outline-primary btn-sm rounded-full">
							<i class="fab fa-youtube"></i>
						</a>
						<a href="https://instagram.com/bastian.nazaromi" target="_blank" class="mr-3 btn new-btn-outline-primary btn-sm rounded-full">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="https://twitter.com/jihanxix" target="_blank" class="mr-3 btn new-btn-outline-primary btn-sm rounded-full">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="https://facebook.com/zlatan.ibrahimromay" target="_blank" class="mr-3 btn new-btn-outline-primary btn-sm rounded-full">
							<i class="fab fa-facebook"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->

	<!-- Blog Section Start -->
	<section id="berita" class="new-bg-secondary pt-5 pb-5">
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<h2 class="mb-4 new-text-primary font-weight-bold">Berita Terkini</h2>
						<p class="new-text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, distinctio provident. Deleniti, a!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<div class="mb-5 overflow-hidden rounded-top bg-white shadow-lg">
						<img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-100">
						<div class="py-4 px-4">
							<h3 class="mb-3">
								<a href="#" class="text-dark">Tips Belajar Programming</a>
							</h3>
							<p class="mb-4 new-text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, expedita!</p>
							<a href="#" class="btn new-btn-primary btn-sm rounded-pill">Baca Selengkapnya</a>

							<div class="row mt-3">
								<div class="col-lg-6 text-left">
									<p class="text-muted text-warning" style="font-size: 12px;"><i class="far fa-clock"></i> 12 Des 2023</p>
								</div>
								<div class="col-lg-6 text-right">
									<p class="text-muted text-warning" style="font-size: 12px;"><i class="fa fa-pencil-alt"></i> Programming</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mb-5 overflow-hidden rounded-top bg-white shadow-lg">
						<img src="https://source.unsplash.com/360x200?mechanical+keyboard" alt="Keyboard Mechanical" class="w-100">
						<div class="py-4 px-4">
							<h3 class="mb-3">
								<a href="#" class="text-dark">Review Keyboard GMMK Pro</a>
							</h3>
							<p class="mb-4 new-text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, nulla!</p>
							<a href="#" class="btn new-btn-primary btn-sm rounded-pill">Baca Selengkapnya</a>

							<div class="row mt-3">
								<div class="col-lg-6 text-left">
									<p class="text-muted text-warning" style="font-size: 12px;"><i class="far fa-clock"></i> 12 Des 2023</p>
								</div>
								<div class="col-lg-6 text-right">
									<p class="text-muted text-warning" style="font-size: 12px;"><i class="fa fa-pencil-alt"></i> Programming</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mb-5 overflow-hidden rounded-top bg-white shadow-lg">
						<img src="https://source.unsplash.com/360x200?coffee" alt="Coffee" class="w-100">
						<div class="py-4 px-4">
							<h3 class="mb-3">
								<a href="#" class="text-dark">Menikmati Secangkir Kopi</a>
							</h3>
							<p class="mb-4 new-text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, adipisci!</p>
							<a href="#" class="btn new-btn-primary btn-sm rounded-pill">Baca Selengkapnya</a>

							<div class="row mt-3">
								<div class="col-lg-6 text-left">
									<p class="text-muted text-warning" style="font-size: 12px;"><i class="far fa-clock"></i> 12 Des 2023</p>
								</div>
								<div class="col-lg-6 text-right">
									<p class="text-muted text-warning" style="font-size: 12px;"><i class="fa fa-pencil-alt"></i> Programming</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Section End -->

	<!-- Portfolio Section Start -->
	<section id="portfolio" class="bg-white pt-5 pb-5">
		<div class="container mt-5 mb-5">
			<div class="w-full px-4">
				<div class="mx-auto text-center">
					<h2 class="mb-2 text-lg font-weight-bold new-text-primary">
						Portfolio
					</h2>
					<p class="text-md font-medium text-secondary">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci saepe, quibusdam odit aliquam natus quaerat.
					</p>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="mb-4 col-md-6 col-lg-4">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="assets/img/portfolio/1.png" alt="Covid 19" class="w-100">
					</div>
					<h5 class="mt-3 mb-2 text-xl font-semibold text-dark">
						Monitoring Covid 19
					</h5>
					<p class="text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, earum!
					</p>
				</div>
				<div class="mb-4 col-md-6 col-lg-4">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="assets/img/portfolio/2.png" alt="Covid 19" class="w-100">
					</div>
					<h5 class="mt-3 mb-2 text-xl font-semibold text-dark">
						SIKAPTA
					</h5>
					<p class="text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, earum!
					</p>
				</div>
				<div class="mb-4 col-md-6 col-lg-4">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="assets/img/portfolio/7.png" alt="Covid 19" class="w-100">
					</div>
					<h5 class="mt-3 mb-2 text-xl font-semibold text-dark">
						PMB POLTEKHARBER
					</h5>
					<p class="text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, earum!
					</p>
				</div>
				<div class="mb-4 col-md-6 col-lg-4">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="assets/img/portfolio/4.png" alt="Covid 19" class="w-100">
					</div>
					<h5 class="mt-3 mb-2 text-xl font-semibold text-dark">
						SELEKSI POLTEKHARBER
					</h5>
					<p class="text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, earum!
					</p>
				</div>
				<div class="mb-4 col-md-6 col-lg-4">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="assets/img/portfolio/5.png" alt="Covid 19" class="w-100">
					</div>
					<h5 class="mt-3 mb-2 text-xl font-semibold text-dark">
						OASE
					</h5>
					<p class="text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, earum!
					</p>
				</div>
				<div class="mb-4 col-md-6 col-lg-4">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="assets/img/portfolio/6.png" alt="Covid 19" class="w-100">
					</div>
					<h5 class="mt-3 mb-2 text-xl font-semibold text-dark">
						E-Kursus
					</h5>
					<p class="text-base font-medium new-text-secondary">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, earum!
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio Section End -->

	<!-- Contact Section Start -->
	<section id="contact" class="new-bg-secondary pt-5 pb-5">
		<div class="container mt-5 mb-5">
			<div class="w-full px-4">
				<div class="mx-auto text-center">
					<h2 class="mb-2 text-lg font-weight-bold new-text-primary">
						Contact
					</h2>
					<p class="text-md font-medium new-text-secondary">
						Hubungi Kami
					</p>
				</div>
			</div>

			<form>
				<div class="container-fluid">
					<div class="row justify-content-md-center">
						<div class="mb-4 col-md-8">
							<label for="name" class="text-base font-bold new-text-primary">Nama</label>
							<input type="text" id="name" class="form-control rounded-md" />
						</div>
						<div class="mb-4 col-md-8">
							<label for="email" class="text-base font-bold new-text-primary">Email</label>
							<input type="email" id="email" class="form-control rounded-md" />
						</div>
						<div class="mb-4 col-md-8">
							<label for="message" class="text-base font-bold new-text-primary">Pesan</label>
							<textarea id="message" class="form-control rounded-md" rows="5"></textarea>
						</div>
						<div class="mb-4 col-md-8">
							<button class="btn new-btn-primary btn-block">
								Kirim
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Contact Section End -->

	<!-- Footer Start -->
	<footer class="bg-dark text-light py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-3">
					<img src="assets/img/bn.png" alt="BN" width="200" />
				</div>
				<div class="col-md-4 mb-4">
					<h3 class="mb-2 text-xl font-bold">Hubungi Kami</h3>
					<p>bastian.nazaromi@gmail.com</p>
					<p>Jl. Gotong Royong 1 No. 190</p>
					<p>Brebes</p>
				</div>
				<div class="col-md-4 mb-4 text-center">
					<h3 class="mb-4 text-xl font-weight-bold">Berita</h3>
					<ul class="list-unstyled text-light">
						<li><a href="#" class="mb-3 text-base text-light">Programming</a></li>
						<li><a href="#" class="mb-3 text-base text-light">Teknologi</a></li>
						<li><a href="#" class="mb-3 text-base text-light">Gaya Hidup</a></li>
					</ul>
				</div>
				<div class="col-md-4 mb-4 text-right">
					<h3 class="mb-4 text-xl font-weight-bold">Tautan</h3>
					<ul class="list-unstyled text-light">
						<li><a href="#home" class="mb-3 text-base text-light">Beranda</a></li>
						<li><a href="#about" class="mb-3 text-base text-light">Tentang Saya</a></li>
						<li><a href="#berita" class="mb-3 text-base text-light">Berita</a></li>
						<li><a href="#portfolio" class="mb-3 text-base text-light">Portfolio</a></li>
						<li><a href="#contact" class="mb-3 text-base text-light">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="border-top border-light pt-3">
				<p class="text-center text-xs font-medium text-light">
					Dibuat oleh
					<a href="https://github.com/bastiannazaromi" target="github" class="font-weight-bold new-text-primary" style="text-decoration: none;">Bastian Nazaromi</a>, menggunakan
					<a href="https://getbootstrap.com" target="bootstrap" class="font-weight-bold text-primary">Bootstrap 4</a>.
				</p>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- Back to Top Start -->
	<a href="#" class="rounded-circle mb-4 mr-4 text-center" id="to-top">
		<i class="text-white fas fa-arrow-up fa-2x"></i>
	</a>
	<!-- Back to Top End -->

	<script src="assets/bootstrap/js/jquery-3.6.4.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="assets/custom/script.js"></script>

</body>

</html>