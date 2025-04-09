<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen text-gray-200">

    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-lg p-8 space-y-6">
        <div class="flex justify-center">
            <!-- Logo placeholder - replace src with actual logo path -->
            <img src="https://www.cryox.co/main_logo.png" alt="Logo" class="h-16 mb-4">
        </div>
        
        <h1 class="text-2xl font-semibold text-center">Admin Login</h1>

        <form method="POST" action="{{ route('admin.authenticate') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" name="email" id="email" required
                       class="w-full px-4 py-2 mt-1 bg-gray-700 text-gray-200 border border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 mt-1 bg-gray-700 text-gray-200 border border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <button type="submit"
                    class="w-full px-4 py-2 mt-4 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Login
            </button>
        </form>

        @if($errors->any())
            <div class="mt-4 p-4 text-red-400 bg-red-700 bg-opacity-30 rounded-md">
                <ul class="space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</body>
</html>
