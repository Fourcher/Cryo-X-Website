<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://cdn.tailwindcss.com"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
			rel="stylesheet">


		<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
		<link rel="icon" type="image/x-icon" href="https://www.cryox.co/favicon_retro.png" />
		<link rel="canonical" href="https://www.cryox.co/" />
		<meta property="og:site_name" content="Cryo X Co" />

		<title>Cryo X Co | Cool Any Outdoor Surface Below Air Temperature, Even In Direct Sunlight</title>
		<meta property="og:title" content="Cryo X Co | Cool Any Outdoor Surface Below Air Temperature, Even In Direct Sunlight" />
		<meta property="og:description"
		content="Cryo X Co makes active-cooling paint that can cool any outdoor surface 15 degrees F below the air temperature even in direct sunlight. This enables new ways to cool - improving safety, efficiency and comfort. Perfect for projects big and small such as EVs, Fleets and electrical enclosures. Contact Cryo X today for a quote." />
		
		
		<meta property="og:url" content="https://www.cryox.co/" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="https://www.cryox.co/social_media.png" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="675" />
		<meta itemprop="name" content="Cryo X Co | Cool Any Outdoor Surface Below Air Temperature, Even In Direct Sunlight" />
		<meta itemprop="url" content="https://www.cryox.co/" />
		<meta itemprop="description"
			content="Cryo X Co makes Active-Cooling paint that can cool any outdoor surface 15 degrees F below the air temperature even in direct sunlight. This enables new ways to cool - improving safety, efficiency and comfort. Perfect for projects big and small such as EVs, Fleets and electrical enclosures. Contact Cryo X today for a quote." />
		<meta itemprop="thumbnailUrl" content="https://www.cryox.co/social_media.png" />
		<link rel="image_src" href="https://www.cryox.co/social_media.png" />
		<meta itemprop="image" href="https://www.cryox.co/social_media.png" />
		<meta name="twitter:title" content="Cryo X Co | Cool Any Outdoor Surface Below Air Temperature, Even In Direct Sunlight" />
		<meta name="twitter:image" href="https://www.cryox.co/social_media.png" />
		<meta name="twitter:url" content="https://www.cryox.co/" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:description"
			content="Cryo X Co makes Active-Cooling paint that can cool any outdoor surface 15 degrees F below the air temperature even in direct sunlight. This enables new ways to cool - improving safety, efficiency and comfort. Perfect for projects big and small such as EVs, Fleets and electrical enclosures. Contact Cryo X today for a quote." />
		<meta name="description"
			content="Cryo X Co makes Active-Cooling paint that can cool any outdoor surface 15 degrees F below the air temperature even in direct sunlight. This enables new ways to cool - improving safety, efficiency and comfort. Perfect for projects big and small such as EVs, Fleets and electrical enclosures. Contact Cryo X today for a quote." />


		<style>
			.rethink-800 {
				font-family: "Rethink Sans", sans-serif;
				font-optical-sizing: auto;
				font-weight: 800;
				font-style: normal;
			}

			.rethink-700 {
				font-family: "Rethink Sans", sans-serif;
				font-optical-sizing: auto;
				font-weight: 700;
				font-style: normal;
			}

			.rethink-600 {
				font-family: "Rethink Sans", sans-serif;
				font-optical-sizing: auto;
				font-weight: 600;
				font-style: normal;
			}

			.rethink-500 {
				font-family: "Rethink Sans", sans-serif;
				font-optical-sizing: auto;
				font-weight: 500;
				font-style: normal;
			}

			.rethink-400 {
				font-family: "Rethink Sans", sans-serif;
				font-optical-sizing: auto;
				font-weight: 400;
				font-style: normal;
			}
		</style>

		@livewireStyles

	</head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-95RFVC253D"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-95RFVC253D');
	</script>


	<body>

		<nav class="w-full h-60 hidden lg:block">
			<div class="absolute top-0 left-0 w-full h-60">
				<img src="@yield('hero-image', '/sky.png')" alt="Sky" class="w-full h-full object-cover">
			</div>
			<div class="absolute top-0 left-0 w-full h-60"
				style="background: linear-gradient(0deg, #000c1f 10%, rgba(8, 13, 92, 0.4) 100%);">
			</div>

			<div class="w-full h-24 absolute top-0 flex justify-between items-center px-12" style="z-index: 30">
				<a href="/"><img src="/main_logo.png" class="h-14"></a>
				<div class="flex">
					<button id="buttonDropdown1" data-dropdown-toggle="Dropdown1" type="button"
						class="inline-flex items-center rounded-lg justify-center p-2 hover:text-gray-300 text-md font-medium leading-none text-white me-4 ">
						Products
						<svg class="w-4 h-4 text-white  ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
							height="24" fill="none" viewBox="0 0 24 24">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
						</svg>
					</button>
					<button id="buttonDropdown2" data-dropdown-toggle="Dropdown2" type="button"
						class="inline-flex items-center rounded-lg justify-center p-2 hover:text-gray-300 text-md font-medium leading-none text-white me-4">
						Why CryoX?
						<svg class="w-4 h-4 text-white  ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
							height="24" fill="none" viewBox="0 0 24 24">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="m19 9-7 7-7-7" />
						</svg>
					</button>
					<button id="buttonDropdown4" data-dropdown-toggle="Dropdown4" type="button"
						class="inline-flex items-center rounded-lg justify-center p-2 hover:text-gray-300 text-md font-medium leading-none text-white me-4">
						Resources
						<svg class="w-4 h-4 text-white  ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
							height="24" fill="none" viewBox="0 0 24 24">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="m19 9-7 7-7-7" />
						</svg>
					</button>


					<div id="Dropdown1"
						class="hidden w-full divide-y divide-gray-900 overflow-hidden overflow-y-auto bg-black bg-opacity-90 shadow-lg flex justify-center py-6 gap-6">

						<a href="/active-cooling-water-based-cryopaint">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="/225.png" alt="CryoPaint Water Based Cooling" class="h-24 m-auto object-cover rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">CryoPaint Gallon</h3>
									<p class="text-xs text-white">Easy-to-use Active-Cooling paint.</p>
								</div>
							</div>
						</a>

						<a href="/cooling-pdrc-cryocan-spray">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="/spray_clean.png" alt="CryoCan Spray Paint" class="h-24 m-auto object-cover rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">CryoCan Spray</h3>
									{{-- <p class="text-xs text-white">Precision PDRC cooling, tailored to your needs.</p> --}}
									<p class="text-xs text-red-500">Coming Soon. Pre-order Now!</p>
								</div>
							</div>
						</a>

						<a href="/active-cooling-cryopaint-sample">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="/sample_bg.jpg" alt="CryoPaint Sample" class="h-24 m-auto object-cover rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">CryoPaint Sample</h3>
									<p class="text-xs text-white">Try before you buy. 2oz sample.</p>
								</div>
							</div>
						</a>



					</div>


					<div id="Dropdown2"
						class="hidden w-full divide-y divide-gray-900 overflow-hidden overflow-y-auto bg-black bg-opacity-90 shadow-lg flex justify-center py-6 gap-6">

						<a href="/why-choose-cryox">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="/graph.png" alt="CryoSkin Vinyl" class="h-24 m-auto object-cover rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">Cooling Comparison</h3>
									<p class="text-xs text-gray-300">CryoX is led by science. See why it's so good. </p>
								</div>
							</div>
						</a>
						<a href="/testimonials">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="/testimonials.png" alt="CryoSkin Vinyl" class="h-24 m-auto object-cover rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">Testimonials </h3>
									<p class="text-xs text-gray-300">Don't hear it from us. Listen to our customers</p>
								</div>
							</div>
						</a>
					</div>

					<div id="Dropdown4"
						class="hidden w-full divide-y divide-gray-900 overflow-hidden overflow-y-auto bg-black bg-opacity-90 shadow-lg flex justify-center py-6 gap-6">

						<a href="/contact">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="contactus.webp" alt="Contact Us" class="h-16 m-auto object-contain rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">Contact Us</h3>
									<p class="text-xs text-gray-300">Reach out directly to us. Questions, Queries, Orders? </p>
								</div>
							</div>
						</a>
						<a href="/about-us">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="/logo.png" alt="CryoSkin Vinyl" class="h-24 m-auto object-cover rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">About Us</h3>
									<p class="text-xs text-gray-300">Learn more about CryoX and our mission.</p>
								</div>
							</div>
						</a>
						<a href="/blog">
							<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
								<img src="/blog.png" alt="CryoSkin Vinyl" class="h-24 m-auto object-cover rounded">
								<div class="mt-2">
									<h3 class="text-lg font-semibold text-white bluegradient">Blog </h3>
									<p class="text-xs text-gray-300">Keep up to date with our latest news!</p>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div>


					<button id="basketDropdown1" data-dropdown-toggle="Basket1" type="button"
						class="inline-flex items-center rounded-lg justify-center p-2 hover:text-gray-300 text-md font-medium leading-none text-white me-4 ">
						<i class="bi bi-cart2 text-white text-2xl"></i>
					</button>

					<div id="Basket1"
						class="hidden z-10 w-96 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-white antialiased shadow dark:divide-gray-600 dark:bg-gray-700">

						@livewire('basket-count')
					</div>


					{{-- Book a demo --}}
					<a target="_blank" href="/contact" class="text-white">
						<button
							style="border-radius: 10px;
                        background: linear-gradient(91deg, #0067FF 10.78%, #003E99 85.5%);"
							class=" ms-4 text-white px-4 py-2 rounded-lg">Contact Us</button>
					</a>
				</div>

			</div>

		</nav>

		{{-- Mobile Navigation Bar --}}
		<nav class="lg:hidden w-full h-auto bg-black flex">
			<div class="w-full h-16 flex justify-between items-center px-12">
				<a href="/"><img src="/main_logo.png" class="h-14"></a>
				<button class="text-white text-2xl" id="mobileMenu" data-dropdown-toggle="Mobile1" type="button">
					<i class="bi bi-list"></i>
				</button>
			</div>
		
			<div id="Mobile1"
				class="hidden w-full overflow-hidden overflow-y-auto bg-black bg-opacity-100 shadow-lg grid grid-cols-1 sm:grid-cols-2 py-6 gap-6 z-20">
		
				<a href="/active-cooling-water-based-cryopaint">
					<div class="flex flex-col items-center text-center hover:bg-gray-900 p-4 sm:p-6 md:p-8 lg:p-12">
						<img src="/225.png" alt="CryoPaint Gallon" class="h-20 sm:h-24 max-w-full m-auto object-contain rounded">
						<div class="mt-2">
							<h3 class="text-base sm:text-lg font-semibold text-white bluegradient">CryoPaint</h3>
							<p class="text-xs text-gray-300">Easy-to-use Active-Cooling paint.</p>
						</div>
					</div>
				</a>

				<a href="/cooling-pdrc-cryocan-spray">
					<div class="flex flex-col items-center text-center hover:bg-gray-900 p-4 sm:p-6 md:p-8 lg:p-12">
						<img src="/paint2.png" alt="CryoCan Spray Paint" class="h-20 sm:h-24 max-w-full m-auto object-contain rounded">
						<div class="mt-2">
							<h3 class="text-base sm:text-lg font-semibold text-white bluegradient">CryoCan</h3>
							<p class="text-xs text-gray-300">Precision PDRC cooling, tailored to your needs.</p>
						</div>
					</div>
				</a>

				<a href="/active-cooling-cryopaint-sample">
					<div class="flex flex-col items-center text-center hover:bg-gray-900 p-4 sm:p-6 md:p-8 lg:p-12">
						<img src="/sample_bg.jpg" alt="CryoPaint Sample" class="h-20 sm:h-24 max-w-full m-auto object-contain rounded">
						<div class="mt-2">
							<h3 class="text-base sm:text-lg font-semibold text-white bluegradient">CryoPaint Sample</h3>
							<p class="text-xs text-gray-300">Try before you buy. 2oz sample.</p>
						</div>
					</div>
				</a>


				<a href="/why-choose-cryox">
					<div class="flex flex-col items-center text-center hover:bg-gray-900 p-4 sm:p-6 md:p-8 lg:p-12">
						<img src="/spray_clean.png" alt="Why choose CryoX" class="h-20 sm:h-24 max-w-full m-auto object-contain rounded">
						<div class="mt-2">
							<h3 class="text-base sm:text-lg font-semibold text-white bluegradient">Cooling Comparison</h3>
							<p class="text-xs text-gray-300">CryoX is led by science. See why it's so good.</p>
						</div>
					</div>
				</a>

				<a href="/testimonials">
					<div class="flex flex-col items-center text-center hover:bg-gray-900 p-4 sm:p-6 md:p-8 lg:p-12">
						<img src="/testimonials.png" alt="CryoCan Spray Paint" class="h-20 sm:h-24 max-w-full m-auto object-contain rounded">
						<div class="mt-2">
							<h3 class="text-base sm:text-lg font-semibold text-white bluegradient">Testimonials</h3>
							<p class="text-xs text-gray-300">Don't hear it from us. Listen to our customers</p>
						</div>
					</div>
				</a>



				{{-- Contact us --}}
				<a href="/contact">
					<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
						<img src="contactus.webp" alt="Contact Us" class="h-16 m-auto object-cover rounded">
						<div class="mt-2">
							<h3 class="text-lg font-semibold text-white bluegradient">Contact Us</h3>
							<p class="text-xs text-gray-300">Reach out directly to us. Questions, Queries, Orders? </p>
						</div>
					</div>
				</a>

				<a href="/about-us">
					<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
						<img src="/logo.png" alt="CryoSkin Vinyl" class="h-24 m-auto object-cover rounded">
						<div class="mt-2">
							<h3 class="text-lg font-semibold text-white bluegradient">About Us</h3>
							<p class="text-xs text-gray-300">Learn more about CryoX and our mission.</p>
						</div>
					</div>
				</a>

				<a href="/blog">
					<div class="text-center items-center space-x-4 hover:bg-gray-900 p-12">
						<img src="/blog.png" alt="CryoSkin Vinyl" class="h-24 m-auto object-cover rounded">
						<div class="mt-2">
							<h3 class="text-lg font-semibold text-white bluegradient">Blog </h3>
							<p class="text-xs text-gray-300">Keep up to date with our latest news!</p>
						</div>
					</div>
				</a>
			</div>
		</nav>




		<div class="w-full h-auto bg-cover bg-top bg-no-repeat pb-20" style="background-image: url('/figma.jpeg');">
			@yield('content')
		</div>

		<footer class="w-full bg-gray-950 text-white">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
				<div class="flex flex-col md:flex-row justify-between items-center">
					<div class="mb-6 md:mb-0">
						<img src="/logo.png" alt="Logo" class="h-10 md:h-14 mx-auto md:mx-0">
					</div>
					<div class="flex flex-col w-full md:w-auto">
						<div class="flex flex-col md:flex-row border-b border-gray-700 pb-2 text-center md:text-left">
							<a href="/" class="text-white mb-2 md:mb-0 md:mr-8">Home</a>
							<a href="/about-us" class="text-white mb-2 md:mb-0 md:mr-8">About Us</a>
							<a href="/blog" class="text-white mb-2 md:mb-0 md:mr-8">Blog</a>
							<a href="/contact" class="text-white">Contact</a>
						</div>
						<div class="flex justify-center md:justify-end mt-6 text-2xl">
							<a href="#" class="bluegradient mx-2"><i class="bi bi-facebook"></i></a>
							<a href="#" class="bluegradient mx-2"><i class="bi bi-twitter"></i></a>
							<a href="#" class="bluegradient mx-2"><i class="bi bi-instagram"></i></a>
							<a href="#" class="bluegradient mx-2"><i class="bi bi-youtube"></i></a>
						</div>
					</div>
				</div>

			</div>
			<div class="text-center pt-6">
				<a href="/privacy-policy" class="text-white mt-2">Privacy Policy</a>
				| <a href="/terms-and-conditions" class="text-white mt-2">Terms and Conditions</a><br><br>
				<p>&copy; 2021 Cryo X Co. All rights reserved. - Designed by <a href="https://www.linkedin.com/in/louis-tromans-%F0%9F%A4%99%F0%9F%8F%BC-938574171/?originalSubdomain=uk" class="text-blue-500">Louis Tromans</a></p>
				{{-- Privacy Policy & Terms and conditions --}}
			</div>
		</footer>



		<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

		<style>
			@keyframes shimmer {
			  0% {
				background-position: -200%;
			  }
			  100% {
				background-position: 200%;
			  }
			}
		  
			.bluegradient {
			  background: linear-gradient(to right, #0096F1, #0041ce, #0096F1);
			  background-size: 200% auto; /* Make the gradient wider for animation */
			  -webkit-background-clip: text;
			  -webkit-text-fill-color: transparent;
			  animation: shimmer 3s linear infinite; /* Adjust speed and looping */
			}
		  </style>
		  

		@livewireScripts
	</body>

</html>
