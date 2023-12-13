<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Bastian Nazaromi | Portfolio Tailwind CSS</title>

	<link href="dist/css/final.css" rel="stylesheet" />

	<script>
		if (
			localStorage.theme === "dark" ||
			(!("theme" in localStorage) &&
				window.matchMedia("(prefers-color-scheme: dark)").matches)
		) {
			document.documentElement.classList.add("dark");
		} else {
			document.documentElement.classList.remove("dark");
		}
	</script>
</head>

<body>
	<!-- Header Start -->
	<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
		<div class="container">
			<div class="relative flex items-center justify-between">
				<div class="px-4">
					<a href="#home" class="block py-6 text-lg font-bold text-primary">
						<img src="dist/img/bn.png" alt="BN" width="100" />
					</a>
				</div>
				<div class="flex items-center px-4">
					<button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
						<span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
						<span class="hamburger-line transition duration-300 ease-in-out"></span>
						<span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
					</button>

					<nav id="nav-menu" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-secondary lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
						<ul class="block lg:flex">
							<li class="group">
								<a href="#home" class="mx-8 flex py-2 text-base text-dark hover:text-primary dark:text-white">Beranda</a>
							</li>
							<li class="group">
								<a href="#about" class="mx-8 flex py-2 text-base text-dark hover:text-primary dark:text-white">Tentang Saya</a>
							</li>
							<li class="group">
								<a href="#portfolio" class="mx-8 flex py-2 text-base text-dark hover:text-primary dark:text-white">Portfolio</a>
							</li>
							<li class="group">
								<a href="#clients" class="mx-8 flex py-2 text-base text-dark hover:text-primary dark:text-white">Clients</a>
							</li>
							<li class="group">
								<a href="#blog" class="mx-8 flex py-2 text-base text-dark hover:text-primary dark:text-white">Blog</a>
							</li>
							<li class="group">
								<a href="#contact" class="mx-8 flex py-2 text-base text-dark hover:text-primary dark:text-white">Contact</a>
							</li>
							<li class="mt-3 flex items-center pl-8 lg:mt-0">
								<div class="flex">
									<span class="mr-2 text-sm text-secondary dark:text-white">light</span>
									<input type="checkbox" class="hidden" id="dark-toggle" />
									<label for="dark-toggle">
										<div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-secondary p-1 dark:bg-white" id="toggle-bg">
											<div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out dark:bg-blue-600" id="toggle-circle"></div>
										</div>
									</label>
									<span class="ml-2 text-sm text-secondary dark:text-white">dark</span>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Contact Section Start -->
	<section id="contact" class="pt-36 pb-32 dark:bg-slate-700">
		<div class="container">
			<div class="w-full px-4">
				<div class="mx-auto mb-16 max-w-2xl text-center">
					<h4 class="mb-2 text-lg font-semibold text-primary">
						Contact
					</h4>
					<h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">
						Hubungi Kami
					</h2>
					<p class="text-md font-medium text-secondary md:text-lg">
						Lorem ipsum dolor sit amet consectetur adipisicing
						elit. Delectus, repellendus!
					</p>
				</div>
			</div>

			<form>
				<div class="w-full lg:mx-auto lg:w-2/3">
					<div class="mb-8 w-full px-4">
						<label for="name" class="text-base font-bold text-primary">Nama</label>
						<input type="text" id="name" class="w-full rounded-md bg-slate-200 p-3 text-dark ring-1 ring-slate-500 focus:outline-none focus:ring-primary" />
					</div>
					<div class="mb-8 w-full px-4">
						<label for="email" class="text-base font-bold text-primary">Email</label>
						<input type="email" id="email" class="w-full rounded-md bg-slate-200 p-3 text-dark ring-1 ring-slate-500 focus:outline-none focus:ring-primary" />
					</div>
					<div class="mb-8 w-full px-4">
						<label for="message" class="text-base font-bold text-primary">Pesan</label>
						<textarea id="message" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark ring-1 ring-slate-500 focus:outline-none focus:ring-primary"></textarea>
					</div>
					<div class="w-full px-4">
						<button class="w-full rounded-full bg-primary px-8 py-3 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">
							Kirim
						</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Contact Section End -->

	<!-- Footer Start -->
	<footer class="bg-slate-800 pt-24 pb-12">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
					<h2 class="mb-5 text-4xl font-bold text-white">MAY</h2>
					<h3 class="mb-2 text-2xl font-bold">Hubungi Kami</h3>
					<p>bastian.nazaromi@gmail.com</p>
					<p>Jl. Gotong Royong 1 No. 190</p>
					<p>Brebes</p>
				</div>
				<div class="mb-12 w-full px-4 md:w-1/3">
					<h3 class="mb-5 text-xl font-semibold text-white">
						Kategori Tulisan
					</h3>
					<ul class="text-slate-300">
						<li>
							<a href="#" class="mb-3 inline-block text-base hover:text-primary">Programming</a>
						</li>
						<li>
							<a href="#" class="mb-3 inline-block text-base hover:text-primary">Teknologi</a>
						</li>
						<li>
							<a href="#" class="mb-3 inline-block text-base hover:text-primary">Gaya Hidup</a>
						</li>
					</ul>
				</div>
				<div class="mb-12 w-full px-4 md:w-1/3">
					<h3 class="mb-5 text-xl font-semibold text-white">
						Tautan
					</h3>
					<ul class="text-slate-300">
						<li>
							<a href="#home" class="mb-3 inline-block text-base hover:text-primary">Beranda</a>
						</li>
						<li>
							<a href="#about" class="mb-3 inline-block text-base hover:text-primary">Tentang Saya</a>
						</li>
						<li>
							<a href="#portfolio" class="mb-3 inline-block text-base hover:text-primary">Portfolio</a>
						</li>
						<li>
							<a href="#blog" class="mb-3 inline-block text-base hover:text-primary">Blog</a>
						</li>
						<li>
							<a href="#clients" class="mb-3 inline-block text-base hover:text-primary">Clients</a>
						</li>
						<li>
							<a href="#contact" class="mb-3 inline-block text-base hover:text-primary">Contact</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="w-full border-t border-slate-700 pt-10">
				<div class="mb-5 flex items-center justify-center">
					<!-- Youtube -->
					<a href="https://youtube.com/@maykomputer5117" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>YouTube</title>
							<path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
						</svg>
					</a>
				</div>
				<p class="text-center text-xs font-medium text-slate-500">
					Dibuat dengan <span class="text-pink-500">❤️</span> oleh
					<a href="https://github.com/bastiannazaromi" target="_blank" class="font-bold text-primary">Bastian Nazaromi</a>, menggunakan
					<a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.
				</p>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- Back to Top Start -->
	<a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
		<span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
	</a>
	<!-- Back to Top End -->

	<script src="dist/js/script.js"></script>
</body>

</html>