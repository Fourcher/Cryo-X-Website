{{-- Extend layouts/public --}}
@extends('layouts.public')

{{-- @section('hero-image') --}}

{{-- Define title --}}
@section('content')
	<div class="container m-auto rethink-700 text-white text-center lg:text-left pt-12 lg:pt-0">
		<div class="text-6xl">Checkout Now</div>
		<div class="p-4">
        @livewire('checkout')
		</div>

		



	</div>
@endsection
