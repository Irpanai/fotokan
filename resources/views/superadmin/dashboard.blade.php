<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-accent to-blue-400 leading-tight">
            {{ __('Super Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- High Level Metrics Overview -->
            <div class="bg-gray-800/50 backdrop-blur-sm rounded-3xl p-6 border border-gray-700/50">
                <h3 class="text-lg font-bold text-gray-300 mb-6 pl-2 border-l-4 border-accent">Platform Overview</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Total Users -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border border-gray-700/50 p-6 flex flex-col justify-between hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 hover:border-blue-500/30 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-blue-500/10 rounded-full blur-xl group-hover:bg-blue-500/20 transition duration-500"></div>
                        <div class="flex items-center gap-4 mb-4 relative z-10">
                            <div class="w-12 h-12 rounded-xl bg-blue-500/20 border border-blue-500/30 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <p class="text-gray-400 text-sm font-medium">Total Registered Users</p>
                        </div>
                        <h4 class="text-4xl font-black text-white relative z-10">{{ \App\Models\User::count() }}</h4>
                    </div>

                    <!-- Total Photographers -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border border-gray-700/50 p-6 flex flex-col justify-between hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-500/10 hover:border-purple-500/30 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-purple-500/10 rounded-full blur-xl group-hover:bg-purple-500/20 transition duration-500"></div>
                        <div class="flex items-center gap-4 mb-4 relative z-10">
                            <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <p class="text-gray-400 text-sm font-medium">Active Photographers</p>
                        </div>
                        <h4 class="text-4xl font-black text-white relative z-10">{{ \App\Models\User::where('role', 'fotografer')->count() }}</h4>
                    </div>

                    <!-- Total Transactions -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border border-gray-700/50 p-6 flex flex-col justify-between hover:-translate-y-1 hover:shadow-xl hover:shadow-green-500/10 hover:border-green-500/30 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-green-500/10 rounded-full blur-xl group-hover:bg-green-500/20 transition duration-500"></div>
                        <div class="flex items-center gap-4 mb-4 relative z-10">
                            <div class="w-12 h-12 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <p class="text-gray-400 text-sm font-medium">Successful Transactions</p>
                        </div>
                        <h4 class="text-4xl font-black text-white relative z-10">{{ \App\Models\Transaction::where('status', 'paid')->count() }}</h4>
                    </div>

                    <!-- Platform Revenue -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border border-gray-700/50 p-6 flex flex-col justify-between hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/10 hover:border-accent/30 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-accent/10 rounded-full blur-xl group-hover:bg-accent/20 transition duration-500"></div>
                        <div class="flex items-center gap-4 mb-4 relative z-10">
                            <div class="w-12 h-12 rounded-xl bg-accent/20 border border-accent/30 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <p class="text-gray-400 text-sm font-medium">Total GMV</p>
                        </div>
                        <h4 class="text-2xl lg:text-3xl font-black text-white relative z-10 truncate" title="Rp {{ number_format(\App\Models\Transaction::where('status', 'paid')->sum('total_bayar'), 0, ',', '.') }}">
                            Rp {{ number_format(\App\Models\Transaction::where('status', 'paid')->sum('total_bayar'), 0, ',', '.') }}
                        </h4>
                    </div>
                </div>
            </div>

            <!-- Two Column Layout for Moderation -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                
                <!-- Pending Withdrawals -->
                <div class="bg-gray-800/80 backdrop-blur-md overflow-hidden shadow-2xl sm:rounded-3xl border border-gray-700/50 flex flex-col h-full">
                    <div class="p-6 sm:p-8 border-b border-gray-700/50 flex justify-between items-center bg-gray-900/30">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-yellow-500/20 text-yellow-500 flex items-center justify-center border border-yellow-500/20">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">Withdrawal Requests</h3>
                        </div>
                        
                        @php
                            $withdrawals = \App\Models\Withdrawal::with('user')->where('status', 'pending')->latest()->get();
                        @endphp
                        
                        @if($withdrawals->isNotEmpty())
                            <span class="bg-yellow-500/20 border border-yellow-500/30 text-yellow-400 text-xs font-bold px-3 py-1 rounded-full animate-pulse">
                                {{ $withdrawals->count() }} Pending
                            </span>
                        @endif
                    </div>
                    
                    <div class="p-6 flex-grow">
                        @if($withdrawals->isEmpty())
                            <div class="flex flex-col items-center justify-center h-full py-12">
                                <div class="w-20 h-20 rounded-full bg-gray-900/50 flex items-center justify-center mb-4 border border-gray-700">
                                    <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="text-gray-300 font-semibold text-lg">All caught up!</p>
                                <p class="text-gray-500 text-sm mt-1">There are no pending withdrawal requests.</p>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach($withdrawals as $wd)
                                    <div class="group bg-gray-900/50 border border-gray-700 hover:border-accent/50 rounded-2xl p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 transition-all duration-300 hover:shadow-lg hover:shadow-accent/5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-500/20 to-accent/20 flex items-center justify-center border border-gray-600 text-lg font-bold text-gray-300">
                                                {{ substr($wd->user->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <p class="text-white font-bold text-lg leading-tight">{{ $wd->user->name }}</p>
                                                <div class="flex items-center gap-2 mt-1">
                                                    <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($wd->created_at)->diffForHumans() }}</span>
                                                    <span class="w-1 h-1 rounded-full bg-gray-600"></span>
                                                    <span class="text-xs font-semibold text-gray-400">{{ $wd->metode_pembayaran }} ({{ $wd->nomor_tujuan }})</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between sm:justify-end w-full sm:w-auto gap-4 sm:gap-6 mt-2 sm:mt-0 pt-3 sm:pt-0 border-t border-gray-700 sm:border-0">
                                            <div class="text-left sm:text-right">
                                                <p class="text-xs text-gray-500 mb-0.5">Amount</p>
                                                <span class="font-black text-green-400 text-lg">Rp {{ number_format($wd->jumlah_tarik, 0, ',', '.') }}</span>
                                            </div>
                                            <form action="{{ route('superadmin.withdrawals.approve', $wd->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="bg-gradient-to-r from-green-600 to-green-500 hover:from-green-500 hover:to-green-400 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition-all duration-300 shadow-lg shadow-green-500/20 hover:shadow-green-500/40 transform hover:-translate-y-0.5">
                                                    Approve
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Unverified Photographers -->
                <div class="bg-gray-800/80 backdrop-blur-md overflow-hidden shadow-2xl sm:rounded-3xl border border-gray-700/50 flex flex-col h-full">
                    <div class="p-6 sm:p-8 border-b border-gray-700/50 flex justify-between items-center bg-gray-900/30">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center border border-blue-500/20">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">Pending Verification</h3>
                        </div>
                        
                        @php
                            $unverified = \App\Models\User::where('role', 'fotografer')->where('is_verified', false)->latest()->get();
                        @endphp
                        
                        @if($unverified->isNotEmpty())
                            <span class="bg-blue-500/20 border border-blue-500/30 text-blue-400 text-xs font-bold px-3 py-1 rounded-full">
                                {{ $unverified->count() }} Pending
                            </span>
                        @endif
                    </div>
                    
                    <div class="p-6 flex-grow">
                        @if($unverified->isEmpty())
                            <div class="flex flex-col items-center justify-center h-full py-12">
                                <div class="w-20 h-20 rounded-full bg-gray-900/50 flex items-center justify-center mb-4 border border-gray-700">
                                    <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="text-gray-300 font-semibold text-lg">No actions needed</p>
                                <p class="text-gray-500 text-sm mt-1">All photographers are fully verified.</p>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach($unverified as $fg)
                                    <div class="group bg-gray-900/50 border border-gray-700 hover:border-blue-500/50 rounded-2xl p-5 flex items-center justify-between gap-4 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center border border-gray-600 text-lg font-bold text-gray-300">
                                                {{ substr($fg->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <p class="text-white font-bold text-lg leading-tight">{{ $fg->name }}</p>
                                                <p class="text-sm text-gray-400 mt-0.5">{{ $fg->email }}</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('superadmin.fotografer.verify', $fg->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-blue-600/20 hover:bg-blue-600 text-blue-400 hover:text-white border border-blue-500/30 hover:border-blue-500 text-sm font-bold px-5 py-2.5 rounded-xl transition-all duration-300 shadow-lg shadow-transparent hover:shadow-blue-500/20 transform hover:-translate-y-0.5">
                                                Verify Account
                                            </button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
