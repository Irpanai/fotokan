<nav class="border-b border-gray-100 bg-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 cursor-pointer shrink-0">
                <span class="font-black text-xl tracking-tighter text-black flex items-center gap-1">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path><circle cx="12" cy="13" r="3"></circle></svg>
                    JEPRET
                </span>
            </a>

            <!-- Center Links -->
            <div class="hidden md:flex items-center space-x-6 ml-10">
                <a href="/" class="text-sm font-semibold {{ request()->is('/') ? 'text-black' : 'text-gray-500 hover:text-black' }} transition">Explore</a>
                <a href="{{ route('photographers.index') }}" class="text-sm font-semibold {{ request()->routeIs('photographers.*') ? 'text-black' : 'text-gray-500 hover:text-black' }} transition">Photographers</a>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center space-x-4 ml-auto">
                <!-- Search Navbar -->
                <div class="hidden lg:flex relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" placeholder="Cari event, nomor BIB..." class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-full pl-10 pr-4 py-2 w-64 focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition">
                </div>

                <!-- Cart Icon -->
                <div class="flex items-center relative" x-data="{ cartOpen: false }">
                    <button @click="cartOpen = !cartOpen" @click.away="cartOpen = false" class="text-gray-500 hover:text-black transition relative p-2" title="Keranjang">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white"></span>
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
                         class="absolute top-full right-0 mt-2 w-80 bg-white rounded-xl shadow-[0_4px_20px_-4px_rgba(0,0,0,0.1)] border border-gray-100 overflow-hidden z-50">
                        
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

                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-700 hover:text-black transition">Dashboard</a>
                    <a href="{{ url('/dashboard') }}" class="w-9 h-9 rounded-full overflow-hidden border border-gray-200 block">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=000&color=fff" alt="Avatar" class="w-full h-full object-cover">
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-black transition hidden sm:block">Masuk / Daftar</a>
                    <a href="{{ route('register') }}" class="bg-black text-white text-sm font-semibold px-4 py-2 rounded-full hover:bg-gray-800 transition flex items-center gap-2">
                        Mulai Jual <span class="bg-white text-black text-[10px] px-1.5 py-0.5 rounded-sm font-bold tracking-wider">PRO</span>
                    </a>
                @endauth
            </div>
        </div>
    </div>
    <!-- Banner under navbar -->
    <div class="bg-green-50 border-b border-green-100 py-1.5 px-4 text-center">
         <p class="text-[11px] font-medium text-green-800 flex items-center justify-center">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-green-500 mr-2 animate-pulse"></span>
            <span>DAPATKAN DISKON 50% UNTUK PEMBELIAN PERTAMA DENGAN KODE: <b>JEPFIRST</b> <a href="#" class="underline ml-1">Klaim sekarang</a></span>
        </p>
    </div>
</nav>
