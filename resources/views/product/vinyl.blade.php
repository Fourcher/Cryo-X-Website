@extends('layouts.public')

@section('hero-image', 'wrap.png')

@section('content')

	<div class="container m-auto">

		<div class="text-8xl text-center text-white rethink-700">
			The <span class="bluegradient">Cooling</span> CryoSkin
		</div>

		<div class="text-lg text-center text-white rethink-700 mt-4">
			Versatile vinyl sheet wrap designed to reduce temperature of any outdoor product.
		</div>

		<div class="flex justify-center mt-12">
			<div
				class="h-full ms-4 pt-4 pb-4 pl-8 pr-7 bg-gradient-to-r from-[#0067FF] to-[#003E99] rounded-xl inline-flex justify-center items-center">
				<a href="#buy_now"><div class="w-36 h-7 text-center text-white text-lg font-rethink-sans font-medium leading-7 break-words">
					Buy Now
				</div></a>
			</div>

			<div
				class="h-full pt-4 pb-4 pl-8 pr-7 bg-transparent border-0 border-[#0067FF] rounded-xl inline-flex justify-center items-center">
				<div class="w-36 h-7 text-center text-white text-lg font-rethink-sans font-medium leading-7 break-words">
					<a href="/contact"><span class="bluegradient">Learn More</span></a>
				</div>
			</div>
		</div>

		{{-- big central image --}}
		<div class="text-center w-2/3 m-auto text-center mt-24">
			<img style="width: 100%;  transform: rotate(-9.82deg); transform-origin: 0 0; " src="/vinylpost.png" />
		</div>

		<div class="container w-1/2 m-auto">

			<div class="text-4xl text-left text-white rethink-700 mt-12 pb-4 border-b border-white">
				Features
			</div>

			<div class="text-1xl flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-3xl"></i>
				<div class="ms-4">Fixed width is 2.33ft (28 inches). Max Length 5ft.</div>
			</div>

			<div class="text-1xl flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-3xl"></i>
				<div class="ms-4">Fixed width is 2.33ft (28 inches). Max Length 5ft.</div>
			</div>

			<div class="text-1xl flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-3xl"></i>
				<div class="ms-4">Fixed width is 2.33ft (28 inches). Max Length 5ft.</div>
			</div>

			<div class="text-1xl flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-3xl"></i>
				<div class="ms-4">Fixed width is 2.33ft (28 inches). Max Length 5ft.</div>
			</div>

			<div class="text-1xl flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-3xl"></i>
				<div class="ms-4">Fixed width is 2.33ft (28 inches). Max Length 5ft.</div>
			</div>
		</div>

		<div class="text-8xl text-center text-white rethink-700 mt-20" id="buy_now">
			<span class="bluegradient">Buy</span> Now
		</div>


		<div class="flex flex-col md:flex-row text-white mt-12 w-full md:w-3/4 m-auto">
			<div class="w-full md:w-1/2 p-4 md:p-12">
				<span class="text-2xl md:text-3xl font-bold">The CryoSkin V1<br>Vinyl Matte Sheet for<br>Outdoor materials,<br>vehicles, and buildings.</span>
				<br>
				<div class="text-md mt-4 md:mt-8 mb-4 md:mb-8">Now Only $30/sqft</div>
				<hr>
				<div class="text-md font-medium mt-4 md:mt-8 mb-4">Colour - <span class="font-bold">White</span></div>
				<div class="rounded-full bg-white w-6 border border-blue-600 h-6 m-1 inline-block mb-8"></div>
				<hr>
				<div class="text-md mt-4 md:mt-8 mb-4"><i class="bi bi-truck"></i> Delivery Information</div>
				<div class="text-sm mt-2 md:mt-4 mb-4 md:mb-6">Free delivery on all orders over $100</div>
				<hr>
				@livewire('basket-button', [$product])
			</div>
		
			<div class="w-full md:w-1/2 p-4 md:p-8 text-center">
				<div class="w-full m-auto">
					<img src="/preview_vinyl.png" alt="Vinyl" class="rounded-2xl w-full h-auto" draggable="false">
				</div>
				<div class="w-full md:w-2/3 m-auto flex justify-center mt-4">
					<img src="/preview_vinyl.png" alt="Vinyl" class="rounded-xl w-20 md:w-24 me-2 h-auto" draggable="false">
					<img src="/preview_vinyl.png" alt="Vinyl" class="rounded-xl w-20 md:w-24 me-2 h-auto" draggable="false">
					<img src="/preview_vinyl.png" alt="Vinyl" class="rounded-xl w-20 md:w-24 me-2 h-auto" draggable="false">
				</div>
			</div>
		</div>
		

	</div>


@endsection
