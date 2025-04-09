{{-- Extend layouts/public --}}
@extends('layouts.public')

{{-- @section('hero-image') --}}

{{-- Define title --}}
@section('content')



	<section class="container mx-auto px-4">
		<h1 class="text-4xl md:text-7xl font-bold text-white text-center"><span class="bluegradient">Contact</span> Us Today</h1>

		@livewire('contact-form', ['subject' => request('subject', ''), 'message' => request('message', '')])



		<div class="w-full md:w-1/2 bg-white mx-auto mt-8 md:mt-16 rounded-xl drop-shadow-xl">
			<div class="bg-white w-full h-auto drop-shadow-xl p-6 md:p-12 rounded-xl">
				<span class="text-lg md:text-2xl font-medium text-center">
					<span class="text-sm text-gray-800">Email</span><br><a href="mailto:Jordan@CryoX.co">Jordan@CryoX.co</a>

					<br><br><hr><br>
					<span class="text-sm text-gray-800">LinkedIn</span><br> <a class="text-blue-500 hover:underline" href="https://www.linkedin.com/company/cryo-x-co/">Cryo X Co</a>
				</span>
			</div>
		</div>
	</section>
@endsection
