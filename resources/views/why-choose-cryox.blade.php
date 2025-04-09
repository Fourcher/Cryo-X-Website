{{-- Extend layouts/public --}}
@extends('layouts.public')

{{-- @section('hero-image') --}}

{{-- Define title --}}
@section('content')
	<div class="container m-auto">
		<h1 class="text-center text-white font-bold rethink-700"
			style="line-height: 132.67px; word-wrap: break-word; font-size: 102px">
			The Obvious <span class="bluegradient">Cooling</span> Choice
		</h1>

		<h3 class="mt-2 text-center text-white text-3xl font-bold">Despite it’s benefits, insulation doesn’t remove heat<br>and
			despite its downsides, AC <span class="line-through">is</span> <span class="bluegradient text-5xl">was</span> the only
			way to cool
		</h3>

	</div>

	<section class="container m-auto">

		<table class="w-full text-lg font-bold text-white mt-16">
			<tr>
				<th></th>
				<th>Cryo X</th>
				<th>Insulation</th>
				<th>A/C or HVAC</th>
			</tr>
			<tr class="border-b border-gray-500">
				<td class="p-4">Electricity Free</td>
				<td class="p-4 text-center text-2xl bluegradient"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi text-red-500 bi-x-circle"></i></td>
			</tr>
			<tr class="border-b border-gray-500">
				<td class="p-4">Removes Heat from System</td>
				<td class="p-4 text-center text-2xl bluegradient"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi text-red-500 bi-x-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi bi-check-circle"></i></td>
			</tr>
			{{-- Retrofit Ready --}}
			<tr class="border-b border-gray-500">
				<td class="p-4">Retrofit Ready</td>
				<td class="p-4 text-center text-2xl bluegradient"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi text-red-500 bi-x-circle"></i></td>
			</tr>
			{{-- 0 Maintenance and upkeep costs --}}
			<tr class="border-b border-gray-500">
				<td class="p-4">0 Maintenance and upkeep costs</td>
				<td class="p-4 text-center text-2xl bluegradient"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi text-red-500 bi-x-circle"></i></td>
			</tr>
			{{-- Cost effecient monetary returns --}}
			<tr class="border-b border-gray-500">
				<td class="p-4">Cost effecient monetary returns</td>
				<td class="p-4 text-center text-2xl bluegradient"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi text-red-500 bi-x-circle"></i></td>
			</tr>
			{{-- Easy to install and use --}}
			<tr class="border-b border-gray-500">
				<td class="p-4">Easy to install and use</td>
				<td class="p-4 text-center text-2xl bluegradient"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi bi-check-circle"></i></td>
				<td class="p-4 text-center text-2xl"><i class="bi text-red-500 bi-x-circle"></i></td>
			</tr>


		</table>
	</section>

	<section class="container m-auto">

		<h2 class="text-5xl font-bold text-white mt-32 text-center">CryoSkin In Action</h2>
		<p class="text-blue-600 text-lg text-center mt-4">Avg Temp Difference:  ~15&deg;F | Peak Temp Difference:  ~20-25&deg;F</p>

		<img class="w-full mt-16" src="chart_3.png" alt="Graph">

		<div class="text-gray-300 text-sm text-center mt-8">Location: San Tan Valley, Arizona. Time of Year: November 15th.
			Test is comparing white vinyl to CryoSkin vinyl to see which one absorbs less heat</div>
	</section>

	@endsection
