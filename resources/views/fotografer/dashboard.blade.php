<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-accent to-purple-400 leading-tight">
            {{ __('Photographer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Stats & Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                
                <!-- Revenue Stat -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden shadow-2xl sm:rounded-3xl border border-gray-700/50 p-8 flex flex-col justify-between hover:-translate-y-1 hover:shadow-accent/10 hover:border-accent/30 transition-all duration-300 col-span-1 md:col-span-2 relative group">
                    <div class="absolute -right-12 -top-12 w-48 h-48 bg-accent/5 rounded-full blur-2xl group-hover:bg-accent/10 transition duration-500"></div>
                    <div class="grid grid-cols-2 gap-6 h-full relative z-10">
                        <div class="flex flex-col justify-between border-r border-gray-700/50 pr-6">
                            <div>
                                <p class="text-gray-400 text-sm font-medium">Available Balance</p>
                                <h4 class="text-3xl font-black text-white mt-1">Rp {{ number_format($stats['saldo'], 0, ',', '.') }}</h4>
                                <div class="inline-flex items-center gap-1 mt-2 bg-green-500/10 px-2 py-1 rounded-md border border-green-500/20">
                                    <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                    <p class="text-xs text-green-400 font-semibold">Total Sales: Rp {{ number_format($stats['total_sales'], 0, ',', '.') }}</p>
                                </div>
                            </div>
                            
                            <div x-data="{ open: false }" class="mt-6">
                                <button @click="open = true" class="w-full bg-gradient-to-r from-accent to-purple-600 hover:from-accent-hover hover:to-purple-500 text-white font-bold py-3 rounded-xl transition duration-300 shadow-lg shadow-accent/20 hover:shadow-accent/40">
                                    Withdraw Funds
                                </button>

                                <!-- Modal Withdrawal -->
                                <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
                                    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
                                        <div x-show="open" @click="open = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-900/80 backdrop-blur-md" aria-hidden="true"></div>

                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-gray-800 rounded-3xl shadow-2xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-8 border border-gray-700">
                                            <div>
                                                <h3 class="text-xl font-bold leading-6 text-white" id="modal-title">Withdraw Funds</h3>
                                                <div class="mt-2 mb-6">
                                                    <p class="text-sm text-gray-400">Available: <span class="font-bold text-accent">Rp {{ number_format($stats['saldo'], 0, ',', '.') }}</span></p>
                                                </div>
                                            </div>
                                            <form action="{{ route('fotografer.withdrawals.store') }}" method="POST" class="mt-5 space-y-5">
                                                @csrf
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-300 mb-1.5">Amount to withdraw (Min 10.000)</label>
                                                    <input type="number" name="jumlah_tarik" min="10000" max="{{ $stats['saldo'] }}" class="w-full bg-gray-900 border border-gray-600 text-white rounded-xl px-4 py-3 focus:ring-accent focus:border-accent shadow-inner transition-colors" required>
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-300 mb-1.5">Payment Method</label>
                                                    <select name="metode_pembayaran" class="w-full bg-gray-900 border border-gray-600 text-white rounded-xl px-4 py-3 focus:ring-accent focus:border-accent shadow-inner transition-colors" required>
                                                        <option value="BCA">BCA</option>
                                                        <option value="Mandiri">Mandiri</option>
                                                        <option value="Gopay">Gopay</option>
                                                        <option value="Dana">Dana</option>
                                                        <option value="Ovo">Ovo</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-300 mb-1.5">Account Number / Phone</label>
                                                    <input type="text" name="nomor_tujuan" class="w-full bg-gray-900 border border-gray-600 text-white rounded-xl px-4 py-3 focus:ring-accent focus:border-accent shadow-inner transition-colors" required>
                                                </div>
                                                <div class="mt-8 sm:flex sm:flex-row-reverse gap-3">
                                                    <button type="submit" class="w-full inline-flex justify-center rounded-xl border border-transparent shadow-sm px-6 py-3 bg-accent text-base font-bold text-white hover:bg-accent-hover focus:outline-none sm:w-auto sm:text-sm transition duration-200">
                                                        Submit Request
                                                    </button>
                                                    <button type="button" @click="open = false" class="mt-3 w-full inline-flex justify-center rounded-xl border border-gray-600 shadow-sm px-6 py-3 bg-gray-700 text-base font-bold text-gray-300 hover:bg-gray-600 hover:text-white focus:outline-none sm:mt-0 sm:w-auto sm:text-sm transition duration-200">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col justify-between pl-2">
                            <div>
                                <p class="text-gray-400 text-sm font-medium">Storage Quota</p>
                                <h4 class="text-2xl font-black text-white mt-1">{{ number_format($stats['storage_terpakai'], 1) }} <span class="text-lg font-medium text-gray-500">/ {{ $stats['storage_total'] }} MB</span></h4>
                                
                                <div class="w-full bg-gray-900 rounded-full h-3 mt-4 border border-gray-700 overflow-hidden">
                                  <div class="bg-gradient-to-r from-blue-500 to-accent h-full rounded-full relative" style="width: {{ min(100, ($stats['storage_terpakai'] / max(1, $stats['storage_total'])) * 100) }}%">
                                      <div class="absolute inset-0 bg-white/20 w-full h-full animate-[shimmer_2s_infinite]"></div>
                                  </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="#" class="inline-flex items-center text-sm font-bold text-blue-400 hover:text-blue-300 group transition-colors">
                                    Upgrade to Pro 
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Radar Toggle -->
                <div class="bg-gray-800/80 backdrop-blur-md overflow-hidden shadow-2xl sm:rounded-3xl border border-gray-700/50 p-8 flex flex-col justify-between hover:-translate-y-1 hover:border-red-500/50 hover:shadow-red-500/10 transition-all duration-300 group col-span-1 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="flex justify-between items-start mb-6 relative z-10">
                        <div>
                            <p class="text-gray-400 text-sm font-medium mb-1">Live Radar</p>
                            @php
                                $isActive = $radar && $radar->is_active;
                            @endphp
                            <h4 class="text-2xl font-black {{ $isActive ? 'text-red-400' : 'text-gray-300' }}">
                                {{ $isActive ? 'Broadcasting' : 'Offline' }}
                            </h4>
                        </div>
                        <div class="w-12 h-12 rounded-2xl {{ $isActive ? 'bg-red-500/20 text-red-400 animate-pulse border border-red-500/30' : 'bg-gray-900 text-gray-500 border border-gray-700' }} flex items-center justify-center shrink-0 transition-all duration-300 shadow-inner">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                    </div>
                    <form action="{{ route('fotografer.radar.toggle') }}" method="POST" class="w-full relative z-10">
                        @csrf
                        @if(!$isActive)
                            <div class="flex flex-col gap-3 mt-auto">
                                <input type="text" name="nama_spot" placeholder="e.g. CFD Gate 1" class="w-full bg-gray-900 border border-gray-600 text-white rounded-xl px-4 py-3 text-sm focus:ring-red-500 focus:border-red-500 shadow-inner transition-colors" required>
                                <button type="submit" class="bg-gradient-to-r from-red-600 to-red-500 hover:from-red-500 hover:to-red-400 text-white font-bold py-3 rounded-xl transition duration-300 shadow-lg shadow-red-500/20">
                                    Go Live Now
                                </button>
                            </div>
                        @else
                            <button type="submit" class="w-full bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 rounded-xl transition duration-300 mt-auto border border-gray-600">
                                Stop Broadcasting
                            </button>
                        @endif
                    </form>
                </div>

                <!-- Create Event Quick Link -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden shadow-2xl sm:rounded-3xl border border-gray-700/50 p-8 flex flex-col justify-center items-center text-center hover:-translate-y-1 hover:border-purple-500/50 hover:shadow-purple-500/10 transition-all duration-300 cursor-pointer relative group col-span-1" onclick="window.location='{{ route('fotografer.events.create') }}'">
                    <div class="absolute inset-0 bg-purple-500/5 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="w-20 h-20 rounded-full bg-gray-900 border border-gray-700 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:border-purple-500/50 group-hover:bg-purple-500/10 transition-all duration-500 shadow-inner">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">New Event</h4>
                    <p class="text-gray-400 text-sm">Upload new photos</p>
                </div>
            </div>

            <!-- Recent Events List -->
            <div class="bg-gray-800/80 backdrop-blur-md overflow-hidden shadow-2xl sm:rounded-3xl border border-gray-700/50">
                <div class="p-8 border-b border-gray-700/50 flex justify-between items-center bg-gray-900/20">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-accent/20 flex items-center justify-center text-accent border border-accent/20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Your Recent Events</h3>
                    </div>
                    <a href="{{ route('fotografer.events.index') }}" class="text-sm font-bold text-accent hover:text-accent-hover transition-colors flex items-center gap-1 group">
                        View All 
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                
                @php
                    $events = \App\Models\Event::where('fotografer_id', Auth::id())->latest()->take(5)->get();
                @endphp

                @if($events->isEmpty())
                    <div class="p-16 text-center border-2 border-dashed border-gray-700 rounded-2xl m-8 bg-gray-900/30">
                        <div class="w-20 h-20 rounded-full bg-gray-800 mx-auto flex items-center justify-center mb-4 border border-gray-700">
                            <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <p class="text-gray-300 text-xl font-semibold">You haven't created any events yet.</p>
                        <p class="text-gray-500 mt-2">Start by creating an event to upload photos.</p>
                        <a href="{{ route('fotografer.events.create') }}" class="inline-block mt-6 bg-accent hover:bg-accent-hover text-white font-bold px-8 py-3 rounded-xl transition duration-300 shadow-lg shadow-accent/20">
                            Create First Event
                        </a>
                    </div>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-400">
                            <thead class="bg-gray-900/50 text-xs uppercase text-gray-500 border-b border-gray-700">
                                <tr>
                                    <th scope="col" class="px-8 py-5">Event Name</th>
                                    <th scope="col" class="px-6 py-5">Date</th>
                                    <th scope="col" class="px-6 py-5">Location</th>
                                    <th scope="col" class="px-6 py-5 text-center">Photos</th>
                                    <th scope="col" class="px-8 py-5 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700/50">
                                @foreach($events as $event)
                                    <tr class="hover:bg-gray-700/20 transition duration-200 group">
                                        <th scope="row" class="px-8 py-5 font-bold text-white whitespace-nowrap">
                                            {{ $event->nama_event }}
                                        </th>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                {{ $event->lokasi }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-5 text-center">
                                            <span class="inline-flex items-center justify-center px-3 py-1 text-xs font-bold leading-none text-accent bg-accent/10 border border-accent/20 rounded-full">
                                                {{ $event->photos()->count() }}
                                            </span>
                                        </td>
                                        <td class="px-8 py-5 text-right">
                                            <a href="{{ route('fotografer.events.show', $event) }}" class="inline-flex items-center gap-1 font-bold text-gray-400 hover:text-accent transition-colors bg-gray-900 px-4 py-2 rounded-lg border border-gray-700 hover:border-accent/50 group-hover:bg-gray-800">
                                                Manage
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
