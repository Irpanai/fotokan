<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JEPRETCFD') }} - Creator Center</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { background-color: #FAFAFA; color: #111827; font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="font-sans antialiased text-gray-900 bg-[#F9FAFB] flex h-screen overflow-hidden">
    
    <!-- Sidebar -->
    <aside class="w-[240px] bg-white border-r border-gray-200 flex flex-col shrink-0 h-full">
        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b border-gray-100 shrink-0">
            <a href="/" class="flex items-center gap-2">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path><circle cx="12" cy="13" r="3"></circle></svg>
                <span class="font-black text-sm tracking-tighter text-black uppercase">JEPRETCFD</span>
            </a>
        </div>

        <!-- Role Tabs -->
        @php
            $isSuperAdminRoute = request()->routeIs('superadmin.*');
        @endphp
        <div class="p-4 border-b border-gray-100 flex gap-2 shrink-0">
            <div class="{{ $isSuperAdminRoute ? 'bg-gray-50 text-gray-400 border border-gray-200 cursor-not-allowed' : 'bg-black text-white shadow-sm cursor-pointer' }} flex-1 text-[10px] font-bold py-2 rounded flex justify-center items-center">
                Creator Cloud
            </div>
            <div class="{{ $isSuperAdminRoute ? 'bg-black text-white shadow-sm cursor-pointer' : 'bg-gray-50 text-gray-400 border border-gray-200 cursor-not-allowed' }} flex-1 text-[10px] font-bold py-2 rounded flex justify-center items-center">
                Super Admin
            </div>
        </div>

        <!-- Navigation Menu -->
        <div class="p-4 flex-grow overflow-y-auto">
            <div class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-3 px-3">WORKSPACE</div>
            
            <nav class="space-y-1">
                @php
                    $isDashboard = request()->routeIs('fotografer.dashboard');
                    $isPhotos = request()->routeIs('fotografer.photos.*');
                @endphp
                
                <!-- Overview -->
                <a href="{{ route('fotografer.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold transition {{ $isDashboard ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100' }}">
                    <svg class="w-4 h-4 {{ $isDashboard ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Overview
                </a>
                
                <!-- Photos -->
                <a href="/fotografer/photos" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold transition {{ $isPhotos ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100' }}">
                    <svg class="w-4 h-4 {{ $isPhotos ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Photos
                </a>
                
                <!-- Upload Photo -->
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    Upload Photo
                </a>
                
                <!-- Orders & Transactions -->
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Orders & Transactions
                </a>
                
                <!-- Earnings & Payouts -->
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Earnings & Payouts
                </a>
                
                <!-- Storage Usage -->
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    Storage Usage
                </a>
                
                <!-- Profile & Portfolio -->
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Profile & Portfolio
                </a>
                
                <div class="pt-4 mt-2 border-t border-gray-100">
                    <a href="{{ route('superadmin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-semibold transition {{ $isSuperAdminRoute ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100' }}">
                        <svg class="w-4 h-4 {{ $isSuperAdminRoute ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Super Admin Command
                    </a>
                </div>
            </nav>
        </div>

        <!-- User Profile & Storage Bottom -->
        <div class="p-4 border-t border-gray-100 shrink-0 bg-gray-50/50">
            <div class="mb-4">
                <div class="flex justify-between items-end mb-1">
                    <span class="text-[10px] font-bold text-gray-500">Storage</span>
                    <span class="text-[10px] font-bold text-black">32.4 / 50 GB</span>
                </div>
                <div class="h-1.5 w-full bg-gray-200 rounded-full overflow-hidden">
                    <div class="h-full bg-black rounded-full" style="width: 64.8%;"></div>
                </div>
                <div class="flex justify-between items-center mt-1">
                    <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">PRO PLAN</span>
                    <a href="#" class="text-[9px] font-bold text-black hover:underline uppercase tracking-widest">Upgrade</a>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-black">{{ Auth::user()->name ?? 'Dwi Visual' }}</p>
                    <p class="text-[10px] font-medium text-green-600 flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Terverifikasi
                    </p>
                </div>
                <div class="flex gap-2 text-gray-400">
                    <button class="hover:text-black transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </button>
                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-black transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Workspace -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-white">
        
        <!-- Topbar -->
        <header class="h-16 border-b border-gray-100 flex items-center justify-between px-6 shrink-0 bg-white">
            <div class="flex items-center gap-6 flex-1">
                <div class="flex items-center gap-2">
                    <div class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">CLUSTER-ID: 99.98% UP</span>
                </div>
                
                <div class="relative max-w-md w-full ml-4 hidden md:block">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="block w-full pl-9 pr-3 py-2 border border-gray-200 rounded-lg leading-5 bg-gray-50 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-1 focus:ring-black focus:border-black sm:text-sm transition text-gray-900 font-medium" placeholder="Search catalog, tags, orders (Cmd + K)...">
                </div>
            </div>

            <div class="flex items-center gap-4 ml-auto">
                <button class="relative text-gray-400 hover:text-black transition border border-gray-200 w-8 h-8 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span class="absolute top-1 right-1.5 block h-1.5 w-1.5 rounded-full bg-black ring-2 ring-white"></span>
                </button>
                
                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-black leading-tight">{{ Auth::user()->name ?? 'Dwi Saputra' }}</p>
                        <p class="text-[10px] font-medium text-gray-400 tracking-wider">photographer</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-black text-white flex items-center justify-center border border-gray-200 overflow-hidden shadow-sm shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto bg-[#F9FAFB]">
            <div class="p-6 md:p-8 max-w-7xl mx-auto">
                {{ $slot }}
            </div>
        </main>
        
    </div>
</body>
</html>
