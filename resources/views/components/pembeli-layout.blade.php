<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Jepret') }} - Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="font-sans antialiased bg-[#F9FAFB] text-gray-900" x-data="{ sidebarOpen: window.innerWidth >= 1024 }" @resize.window="sidebarOpen = window.innerWidth >= 1024">
        <div class="flex h-screen overflow-hidden bg-[#F9FAFB]">
            
            <!-- Sidebar -->
            <aside :class="sidebarOpen ? 'translate-x-0 w-[260px]' : '-translate-x-full w-[260px] lg:translate-x-0 lg:w-[80px]'" 
                   class="fixed inset-y-0 left-0 z-50 bg-white border-r border-gray-200 flex flex-col transition-all duration-300 ease-in-out lg:static shadow-sm shrink-0">
                
                <!-- Logo area -->
                <div class="h-16 flex items-center border-b border-gray-200 shrink-0 overflow-hidden" :class="sidebarOpen ? 'px-6 justify-start' : 'px-0 justify-center'">
                    <a href="/" class="flex items-center gap-2">
                        <div class="w-7 h-7 bg-black rounded-full flex items-center justify-center shrink-0">
                            <span class="text-white font-black text-sm">J</span>
                        </div>
                        <span x-show="sidebarOpen" class="font-black text-sm tracking-tighter text-black uppercase whitespace-nowrap">JEPRET</span>
                    </a>
                </div>

                <!-- Navigation -->
                <div class="flex-1 overflow-y-auto py-5 px-3 overflow-x-hidden">
                    <div x-show="sidebarOpen" class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3 px-1">Menu Navigasi</div>
                    <nav class="space-y-1">
                        <a href="{{ route('pembeli.dashboard') }}" :class="sidebarOpen ? 'px-3 justify-start' : 'justify-center'" class="flex items-center gap-3 py-2.5 rounded-lg text-sm font-bold transition-colors {{ request()->routeIs('pembeli.dashboard') ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}" :title="!sidebarOpen ? 'Overview / Dashboard' : ''">
                            <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('pembeli.dashboard') ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            <span x-show="sidebarOpen" class="whitespace-nowrap">Overview / Dashboard</span>
                        </a>
                        <a href="{{ route('pembeli.library') ?? '#' }}" :class="sidebarOpen ? 'px-3 justify-start' : 'justify-center'" class="flex items-center gap-3 py-2.5 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('pembeli.library') ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}" :title="!sidebarOpen ? 'Koleksi Saya' : ''">
                            <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('pembeli.library') ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span x-show="sidebarOpen" class="whitespace-nowrap">Koleksi Saya</span>
                        </a>
                        <a href="{{ route('pembeli.search') }}" :class="sidebarOpen ? 'px-3 justify-start' : 'justify-center'" class="flex items-center gap-3 py-2.5 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('pembeli.search') ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}" :title="!sidebarOpen ? 'Pencarian Bib & Wajah' : ''">
                            <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('pembeli.search') ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span x-show="sidebarOpen" class="whitespace-nowrap">Pencarian Bib & Wajah</span>
                        </a>
                        <a href="{{ route('pembeli.favorites') }}" :class="sidebarOpen ? 'px-3 justify-start' : 'justify-center'" class="flex items-center gap-3 py-2.5 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('pembeli.favorites') ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}" :title="!sidebarOpen ? 'Favorit & Wishlist' : ''">
                            <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('pembeli.favorites') ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                            <span x-show="sidebarOpen" class="whitespace-nowrap">Favorit & Wishlist</span>
                        </a>
                        <a href="{{ route('pembeli.transactions') }}" :class="sidebarOpen ? 'px-3 justify-start' : 'justify-center'" class="flex items-center gap-3 py-2.5 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('pembeli.transactions') ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}" :title="!sidebarOpen ? 'Riwayat Transaksi' : ''">
                            <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('pembeli.transactions') ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            <span x-show="sidebarOpen" class="whitespace-nowrap">Riwayat Transaksi</span>
                        </a>
                        <a href="/" :class="sidebarOpen ? 'px-3 justify-start' : 'justify-center'" class="flex items-center gap-3 py-2.5 rounded-lg text-sm font-semibold transition-colors text-gray-600 hover:bg-gray-100 hover:text-gray-900" :title="!sidebarOpen ? 'Jelajahi Marketplace' : ''">
                            <svg class="w-5 h-5 shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span x-show="sidebarOpen" class="whitespace-nowrap">Jelajahi Marketplace</span>
                        </a>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div x-show="sidebarOpen" class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3 px-1">PENGATURAN</div>
                                <a href="{{ route('profile.edit') }}" :class="sidebarOpen ? 'px-3 justify-start' : 'justify-center'" class="flex items-center gap-3 py-2.5 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('profile.edit') ? 'bg-black text-white shadow-md' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}" :title="!sidebarOpen ? 'Pengaturan Akun' : ''">
                                    <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('profile.edit') ? 'text-white' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <span x-show="sidebarOpen" class="whitespace-nowrap">Pengaturan Akun</span>
                                </a>
                            </div>
                        </nav>
                    </div>
    
                    <!-- User Profile & Logout Bottom -->
                    <div class="p-4 border-t border-gray-100 shrink-0 bg-gray-50/50 overflow-hidden">
                        <div class="flex items-center" :class="sidebarOpen ? 'justify-between' : 'justify-center'">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-900 flex items-center justify-center shrink-0 text-white font-bold text-xs uppercase" :title="!sidebarOpen ? '{{ Auth::user()->name ?? 'User' }}' : ''">
                                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                                </div>
                                <div x-show="sidebarOpen">
                                    <p class="text-sm font-bold text-gray-900 truncate max-w-[120px]">{{ Auth::user()->name ?? 'User' }}</p>
                                    <p class="text-[10px] font-medium text-gray-500 flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                        Member
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-2" x-show="sidebarOpen">
                                <!-- Logout -->
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="p-1.5 hover:text-black hover:bg-gray-200 text-gray-400 rounded-lg transition-colors" title="Logout">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>


            <!-- Main Content Area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden w-full">
                
                <!-- Topbar -->
                <header class="bg-white border-b border-gray-200 sticky top-0 z-30 flex items-center justify-between px-4 sm:px-6 h-16 shrink-0">
                    <div class="flex items-center gap-4 flex-1">
                        <!-- Menu toggle button -->
                        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-900 focus:outline-none p-1.5 rounded-md hover:bg-gray-100 transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>

                        <!-- Search -->
                        <div class="relative max-w-[320px] lg:max-w-md w-full hidden md:block">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="text" placeholder="Cari nomor bib, pelari, atau event (⌘K)..." class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-lg pl-9 pr-4 py-2.5 focus:ring-black focus:border-black text-[13px] font-medium transition-colors hover:bg-white hover:border-gray-300">
                        </div>
                    </div>

                    <!-- Right actions -->
                    <div class="flex items-center shrink-0 relative" x-data="{ cartOpen: false }">
                        <button @click="cartOpen = !cartOpen" @click.away="cartOpen = false" class="flex items-center gap-2 p-2 text-gray-600 hover:text-black hover:bg-gray-100 rounded-lg transition-colors relative" title="Keranjang">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span class="absolute top-1 right-1 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
                        </button>

                        <!-- Cart Dropdown -->
                        <div x-show="cartOpen"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 transform -translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 transform translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100 transform translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 transform -translate-y-2"
                             style="display: none;"
                             class="absolute top-full right-0 mt-2 w-80 bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden z-50">
                            
                            <div class="p-4 border-b border-gray-100 bg-gray-50 flex justify-between items-center">
                                <span class="font-black text-sm text-gray-900">Keranjang (4)</span>
                                <span class="text-[10px] font-bold text-gray-500">Rp80.000</span>
                            </div>

                            <div class="p-3 space-y-3 max-h-64 overflow-y-auto">
                                <!-- Dummy Cart Item 1 -->
                                <div class="flex gap-3">
                                    <div class="w-16 h-12 bg-gray-200 rounded overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1552674605-15c2145eba11?w=200&q=80" class="w-full h-full object-cover grayscale opacity-80" alt="Preview">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-xs font-bold text-gray-900 truncate">Pacing Menuju Bundaran HI</h4>
                                        <p class="text-[9px] text-gray-500 mb-1">Dwi Visual</p>
                                        <div class="font-black text-xs text-gray-900">Rp20.000</div>
                                    </div>
                                </div>
                                <!-- Dummy Cart Item 2 -->
                                <div class="flex gap-3">
                                    <div class="w-16 h-12 bg-gray-200 rounded overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?w=200&q=80" class="w-full h-full object-cover grayscale opacity-80" alt="Preview">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-xs font-bold text-gray-900 truncate">Sprint Garis Finish</h4>
                                        <p class="text-[9px] text-gray-500 mb-1">Lensa Borneo</p>
                                        <div class="font-black text-xs text-gray-900">Rp20.000</div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 border-t border-gray-100 bg-white">
                                <a href="{{ route('pembeli.favorites') }}" class="block w-full bg-black text-white text-center text-xs font-bold py-2.5 rounded-lg hover:bg-gray-800 transition-colors shadow-sm">
                                    Lihat Keranjang & Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Main Content Area -->
            <main class="flex-1 w-full p-4 sm:px-6 lg:px-10 lg:py-8">
                <div class="w-full mx-auto">
                    {{ $slot }}
                </div>
            </main>
            </div>
        </div>

        <!-- Sidebar Mobile Backdrop -->
        <div x-show="sidebarOpen" 
             x-transition:enter="transition-opacity ease-linear duration-300" 
             x-transition:enter-start="opacity-0" 
             x-transition:enter-end="opacity-100" 
             x-transition:leave="transition-opacity ease-linear duration-300" 
             x-transition:leave-start="opacity-100" 
             x-transition:leave-end="opacity-0" 
             class="fixed inset-0 bg-gray-900/40 backdrop-blur-sm z-40 lg:hidden" 
             @click="sidebarOpen = false"
             style="display: none;"></div>

        @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{{ session('success') }}",
                    confirmButtonColor: '#000000',
                    confirmButtonText: 'Tutup'
                });
            });
        </script>
        @endif
        @if(session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: "{{ session('error') }}",
                    confirmButtonColor: '#000000',
                    confirmButtonText: 'Tutup'
                });
            });
        </script>
        @endif
    </body>
</html>
