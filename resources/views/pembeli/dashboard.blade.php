<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-accent to-purple-400 leading-tight">
            {{ __('Welcome, ') . Auth::user()->name }} 👋
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Smart Search Banner -->
            <div class="group relative overflow-hidden rounded-3xl shadow-2xl transition-all duration-500 hover:shadow-accent/20">
                <!-- Animated Background Gradient -->
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 z-0"></div>
                <!-- Decorative Elements -->
                <div class="absolute -top-24 -right-24 w-96 h-96 bg-accent/20 rounded-full blur-3xl opacity-50 group-hover:opacity-70 transition duration-700"></div>
                <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl opacity-50 group-hover:opacity-70 transition duration-700"></div>
                
                <!-- Content -->
                <div class="relative z-10 p-10 sm:p-14 border border-gray-700/50 rounded-3xl bg-gray-900/40 backdrop-blur-sm">
                    <div class="max-w-3xl">
                        <h3 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tight">Find Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-purple-400">Perfect Shot</span></h3>
                        <p class="text-gray-400 mb-10 text-lg md:text-xl font-medium">Search by your BIB number, clothing color, or any other attributes captured during the event using our AI vision.</p>
                        
                        <form action="{{ route('pembeli.search') }}" method="GET" class="flex flex-col sm:flex-row gap-4 relative">
                            <div class="relative flex-grow group/input">
                                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                    <svg class="w-6 h-6 text-gray-400 group-focus-within/input:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="text" name="q" placeholder="e.g. 1042, baju merah, topi hitam..." class="w-full bg-gray-950/80 border border-gray-600 text-white rounded-2xl pl-14 pr-6 py-5 focus:ring-accent focus:border-accent shadow-inner text-lg placeholder-gray-500 backdrop-blur-md transition-all duration-300">
                            </div>
                            <button type="submit" class="bg-gradient-to-r from-accent to-purple-600 hover:from-accent-hover hover:to-purple-500 text-white font-bold px-10 py-5 rounded-2xl transition duration-300 shadow-[0_0_20px_rgba(99,102,241,0.4)] hover:shadow-[0_0_30px_rgba(99,102,241,0.6)] flex items-center justify-center gap-3 whitespace-nowrap transform hover:-translate-y-1">
                                <span class="text-lg">Search</span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Dashboard Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- My Library Stats -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden shadow-xl sm:rounded-3xl border border-gray-700/50 p-8 flex flex-col justify-center gap-4 hover:-translate-y-1 hover:shadow-2xl hover:border-purple-500/50 transition-all duration-300 relative group">
                    <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-24 h-24 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-purple-500/20 flex items-center justify-center shrink-0 border border-purple-500/30">
                        <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        @php
                            $purchasedCount = \App\Models\Transaction::where('pembeli_id', Auth::id())->where('status', 'paid')->count();
                        @endphp
                        <p class="text-gray-400 text-sm font-medium mb-1">Purchased Photos</p>
                        <h4 class="text-4xl font-black text-white">{{ $purchasedCount }} <span class="text-lg font-medium text-gray-500">items</span></h4>
                    </div>
                </div>

                <!-- Active Radar Callout -->
                <a href="/" class="md:col-span-2 bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden shadow-xl sm:rounded-3xl border border-gray-700/50 p-8 relative group cursor-pointer hover:-translate-y-1 hover:shadow-2xl hover:border-red-500/50 transition-all duration-300 block">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-red-500/10 to-transparent rounded-bl-full -z-10 group-hover:scale-110 transition duration-700"></div>
                    <div class="flex justify-between items-center h-full z-10 relative">
                        <div class="pr-8">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/30 mb-4 shadow-[0_0_15px_rgba(239,68,68,0.2)]">
                                <span class="flex h-2.5 w-2.5 relative">
                                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-500 opacity-75"></span>
                                  <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500"></span>
                                </span>
                                <span class="text-xs font-bold text-red-400 tracking-wide uppercase">Live Radar Active</span>
                            </div>
                            <h4 class="text-3xl font-black text-white mb-2">Find Photographers Near You</h4>
                            <p class="text-gray-400 text-lg">Check our real-time map to see which photographers are currently shooting in your area.</p>
                        </div>
                        <div class="w-16 h-16 rounded-2xl bg-gray-800 border border-gray-600 flex items-center justify-center text-gray-400 group-hover:bg-red-500 group-hover:border-red-400 group-hover:text-white group-hover:shadow-[0_0_20px_rgba(239,68,68,0.4)] transition-all duration-300">
                            <svg class="w-8 h-8 transform group-hover:scale-110 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Recent Purchases preview -->
            <div class="bg-gray-800/80 backdrop-blur-md overflow-hidden shadow-xl sm:rounded-3xl border border-gray-700/50">
                <div class="p-8 border-b border-gray-700/50 flex justify-between items-center bg-gray-900/20">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-accent/20 flex items-center justify-center text-accent border border-accent/20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white tracking-tight">Recent Purchases</h3>
                    </div>
                    <a href="{{ route('pembeli.library') }}" class="text-sm font-bold text-accent hover:text-accent-hover transition-colors flex items-center gap-1 group">
                        View All Library 
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <div class="p-8">
                    @php
                        $recentPurchases = \App\Models\Transaction::where('pembeli_id', Auth::id())
                            ->where('status', 'paid')
                            ->with('photo')
                            ->latest()
                            ->take(4)
                            ->get();
                    @endphp

                    @if($recentPurchases->isEmpty())
                        <div class="text-center py-16 border-2 border-dashed border-gray-700 rounded-2xl bg-gray-900/30">
                            <div class="w-20 h-20 rounded-full bg-gray-800 mx-auto flex items-center justify-center mb-4 border border-gray-700">
                                <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <p class="text-gray-300 text-xl font-semibold">Your library is empty</p>
                            <p class="text-gray-500 mt-2 max-w-sm mx-auto">You haven't purchased any photos yet. Try searching for your BIB number above!</p>
                        </div>
                    @else
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                            @foreach($recentPurchases as $transaction)
                                <div class="relative group rounded-2xl overflow-hidden aspect-square border border-gray-700 shadow-lg cursor-pointer">
                                    <img src="{{ Storage::url($transaction->photo->original_path ?? '') }}" alt="Purchased Photo" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-4">
                                        <div class="transform translate-y-4 group-hover:translate-y-0 transition duration-300">
                                            <a href="{{ Storage::url($transaction->photo->original_path ?? '') }}" download class="w-full bg-white/10 hover:bg-white/20 backdrop-blur-md text-white font-bold py-2.5 px-4 rounded-xl text-center flex items-center justify-center gap-2 transition border border-white/20 hover:border-white/40">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                                Download HD
                                            </a>
                                        </div>
                                    </div>
                                    <div class="absolute top-3 right-3 bg-green-500/80 backdrop-blur-md text-white text-[10px] font-bold px-2 py-1 rounded-md shadow-sm border border-green-400/30">
                                        PAID
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
