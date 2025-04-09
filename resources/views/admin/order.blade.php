@extends('layouts.admin')

@section('content')

    <h3 class="text-lg font-semibold text-gray-800 mb-2">ORDER </h3>
    

    @livewire('admin-order', ['order' => $order])

@endsection 
