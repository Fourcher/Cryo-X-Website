@extends('layouts.admin')

@section('content')

    <h3 class="text-lg font-semibold text-gray-800 mb-2">BLOG MANAGEMENT</h3>
    <p class="text-sm text-gray-600 mb-4">Let's create a blog post</p>

    @livewire('create-blog')

    @endsection
