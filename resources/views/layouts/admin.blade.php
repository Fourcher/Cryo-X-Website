<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    @livewireStyles
</head>

<body>

    <div class="flex flex-col md:flex-row h-screen">

        <!-- Sidebar for larger screens and mobile drawer navigation -->
        <div class="md:w-1/4 lg:w-1/5 bg-blue-950 text-white p-4 md:h-full h-auto">

			{{-- Logo --}}

			<div class="flex items-center justify-between md:block">
				<img src="{{ asset('https://www.cryox.co/main_logo.png') }}" alt="logo" class="h-8">
			</div>


            <div class="flex items-center justify-between md:block">
                <div class="text-2xl font-bold">Admin Panel</div>
                <!-- Hamburger menu for mobile screens -->
                <button class="md:hidden text-white" id="menu-toggle">
                    <i class="bi bi-list text-3xl"></i>
                </button>
            </div>

            <ul class="mt-4 hidden md:block" id="menu-content">
                <li class="mb-4">
                    <a href="/admin/users" class="flex items-center">
                        <i class="bi bi-person me-2"></i> Users
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/orders" class="flex items-center">
                        <i class="bi bi-cart me-2"></i> Orders
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/blogs" class="flex items-center">
                        <i class="bi bi-journal-text me-2"></i> Blogs
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/admins" class="flex items-center">
                        <i class="bi bi-person me-2"></i> Admins
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/contact" class="flex items-center">
                        <i class="bi bi-envelope me-2"></i> Contact Entries
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main content area -->
        <div class="flex-1 h-full bg-gray-100 p-4 overflow-auto">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <script>
        // Toggle menu for mobile screens
        const menuToggle = document.getElementById('menu-toggle');
        const menuContent = document.getElementById('menu-content');
        menuToggle.addEventListener('click', () => {
            menuContent.classList.toggle('hidden');
        });
    </script>

    <style>
        .bluegradient {
            background: #0096F1;
            background: linear-gradient(to right, #0096F1 0%, #0041ce 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    @livewireScripts
</body>

</html>
