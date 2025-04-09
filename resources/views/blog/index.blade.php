@extends('layouts.public')


@section('content')
	<div class="container mx-auto px-4 sm:px-6 lg:px-8 text-white">

		<h1 class="text-3xl sm:text-4xl md:text-5xl font-bold"><span class="bluegradient">CryoX</span> Blog Posts</h1>

		@foreach ($blogs as $blog)
			<div class="flex flex-col md:flex-row justify-start mt-12 bg-gray-800 p-6 rounded-lg shadow-lg">
				<!-- Blog Image with Lazy Loading and Blur Placeholder -->
				<div class="w-full md:w-auto">
					<img src="{{ $blog->image }}" class="w-full md:w-48 h-48 object-cover rounded-xl lazyload" alt="{{ $blog->title }}">
				</div>

				<!-- Blog Content -->
				<div class="md:ms-12 mt-4 md:mt-0">
					<!-- Blog Title -->
					<div class="text-xl sm:text-2xl font-bold">{{ $blog->title }}</div>

					<!-- Date Tag -->
					<div class="text-sm text-gray-400 mt-1">{{ $blog->created_at->format('M d, Y') }}</div>

					<!-- Blog Content Preview with Line Clamping for Consistency -->
					<div class="text-base sm:text-lg mt-2 sm:mt-4 line-clamp-3">
						{{ substr($blog->content, 0, 100) . ' ...' }}
					</div>

					<!-- Read More Link with Hover Effects -->
					<a href="/blog/{{ $blog->slug }}"
						class="text-blue-600 mt-2 sm:mt-4 block hover:underline hover:text-blue-800 transition-colors">
						Read More
					</a>
				</div>
			</div>
		@endforeach

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
