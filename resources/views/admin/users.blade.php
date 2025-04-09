@extends('layouts.admin')

@section('content')

    <h3 class="text-lg font-semibold text-gray-800 mb-2">USER MANAGEMENT</h3>
    <p class="text-sm text-gray-600 mb-4">Users are created when an Email and Password is entered during checkout.</p>

    @livewire('admin-users')

@endsection 
