@extends('layouts.public')

@section('content')
	<meta name="keywords" content="blog, {{ $post->title }}, {{ $post->tags }}">
	<meta name="author" content="CryoX">

	<!-- Open Graph Tags for Social Media -->
	<meta property="og:title" content="{{ $post->title }}">
	<meta property="og:description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
	<meta property="og:image" content="{{ $post->image }}">
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:type" content="article">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="{{ $post->title }}">
	<meta name="twitter:description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
	<meta name="twitter:image" content="{{ $post->image }}">

	<title>{{ $post->title }} | CryoX Blog</title>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8  text-white">
        <!-- Blog Title -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold">{{$post->title}}</h1>
    
        <!-- Social Sharing Buttons (Positioned Directly Below Title) -->
        <div class="mt-4 flex space-x-4">
            <!-- Facebook Share -->
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"
               class="text-blue-600 hover:text-blue-800">
                <i class="bi bi-facebook text-2xl"></i>
            </a>
            
            <!-- Twitter Share -->
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
               target="_blank" class="text-blue-500 hover:text-blue-700">
                <i class="bi bi-twitter text-2xl"></i>
            </a>
    
            <!-- LinkedIn Share -->
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank"
               class="text-blue-700 hover:text-blue-900">
                <i class="bi bi-linkedin text-2xl"></i>
            </a>
    
            <!-- Copy Link to Clipboard -->
            <button onclick="copyToClipboard()" class="text-gray-300 hover:text-gray-500">
                <i class="bi bi-clipboard text-2xl"></i>
            </button>
        </div>
    
        <!-- Post Content -->
        <div class="flex flex-col md:flex-row mt-8">
            <img src="{{$post->image}}" class="w-full md:w-96 h-64 md:h-96 object-cover rounded-xl mt-4 md:mt-0">
            <div class="md:pl-8 mt-4 text-base sm:text-lg">{!! $post->content !!}</div>
        </div>
    </div>
    
    <script>
        function copyToClipboard() {
            const dummy = document.createElement('input');
            document.body.appendChild(dummy);
            dummy.value = window.location.href;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
            alert('Link copied to clipboard!');
        }
    </script>
    
@endsection
