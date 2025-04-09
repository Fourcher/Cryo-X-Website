@extends('layouts.admin')

@section('content')

    <h3 class="text-lg font-semibold text-gray-800 mb-2">ORDER MANAGEMENT</h3>
    <p class="text-sm text-gray-600 mb-4">Orders are made during a checkout process. Once payment has been completed, the status will change to "Precompleted"</p>

    @livewire('admin-orders')

@endsection 
