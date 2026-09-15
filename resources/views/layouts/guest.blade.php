<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JEPRET') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { background-color: #FAFAFA; color: #111827; font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen relative text-gray-900 bg-[#FAFAFA]">
    
    <!-- Navbar -->
    <x-navbar />


    <!-- Main Content -->
    <main class="flex-grow py-8 px-4 sm:px-6 flex items-center justify-center relative z-10 w-full">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 bg-white py-8 mt-auto relative z-10">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-gray-500">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-gray-800">JEPRET &copy; 2025</span>
                    <span class="text-gray-300">&middot;</span>
                    <span>Museum-grade architectural photography repository</span>
                </div>
                
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#" class="hover:text-gray-900 transition">Licensing Terms</a>
                    <a href="#" class="hover:text-gray-900 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-900 transition">Terms of Service</a>
                    <a href="#" class="hover:text-gray-900 transition">Curation Standards</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
