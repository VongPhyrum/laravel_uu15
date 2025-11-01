<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel Blog') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans leading-relaxed text-gray-800">

    {{-- Header / Navbar --}}
   <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">Laravel Blog</a>
        <nav class="mt-3 md:mt-0 flex flex-wrap gap-4">
            <a href="{{ route('home') }}" class="hover:underline">Home</a>
            <a href="{{ route('about') }}" class="hover:underline">About</a>
            <a href="{{ route('services') }}" class="hover:underline">Services</a>
            <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
            <a href="{{ route('posts.index') }}" class="hover:underline font-semibold">All Posts</a>
        </nav>
    </div>
</header>


    {{-- Main Content --}}
    <main class="container mx-auto px-6 py-12">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t">
        <div class="container mx-auto px-6 py-6 text-center text-gray-600">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel Blog') }}. All rights reserved.
        </div>
    </footer>

</body>
</html>
