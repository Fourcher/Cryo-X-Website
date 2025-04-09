{{-- Extend layouts/public --}}
@extends('layouts.public')

{{-- @section('hero-image') --}}

{{-- Define title --}}
@section('content')
	<section class="container m-auto">
		<h1 class="text-7xl font-bold text-white text-center">Other companies that<br><span class="bluegradient">LOVE</span>
			what we do</h1>

		<div class="w-1/3 bg-white m-auto mt-16 rounded-xl drop-shadow-xl">
			<div class="bg-white w-full h-auto drop-shadow-xl p-12 rounded-xl">
				<span class="text-2xl font-medium text-center">
					"With CryoX Co's CryoSkin, Hextronics' systems can <b>perform</b> at a <b>higher level</b>"
				</span>
			</div>
			<div class="bg-white w-full h-auto p-12 rounded-xl text-center">
				<img class="w-1/3 m-auto" src="hextronics.png" alt="Hextronics">

				<div class="text-center mt-12">
					<i class="bi bi-star-fill text-yellow-400"></i>
					<i class="bi bi-star-fill text-yellow-400"></i>
					<i class="bi bi-star-fill text-yellow-400"></i>
					<i class="bi bi-star-fill text-yellow-400"></i>
					<i class="bi bi-star-fill text-yellow-400"></i>
				</div>
				<br><br>
				<span class="text-center text-lg">Hextronics CEO</span><br><br>

				<span class="text-center text-sm">Drone Docking Stations</span>
			</div>

		</div>
	</section>
@endsection
