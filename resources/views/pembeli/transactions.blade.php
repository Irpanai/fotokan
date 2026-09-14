<x-pembeli-layout>
    <div class="space-y-8">
        
        <!-- Header Section -->
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">Billing & Invoices</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">
                Riwayat Transaksi
            </h1>
            <p class="text-gray-500 font-medium text-sm max-w-2xl">
                Pantau seluruh riwayat pembelian foto, status pembayaran, dan unduh invoice resmi dari sistem pembayaran kami (QRIS & Midtrans).
            </p>
        </div>

        <!-- Filters -->
        <div class="flex flex-col sm:flex-row items-center justify-between border-b border-gray-200 pb-4 gap-4">
            <div class="flex flex-wrap gap-2">
                <button class="px-3 py-1.5 bg-black text-white rounded-lg text-xs font-bold shadow-sm">Semua Transaksi</button>
                <button class="px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-lg text-xs font-semibold hover:border-black hover:text-black transition">Berhasil (Paid)</button>
                <button class="px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-lg text-xs font-semibold hover:border-black hover:text-black transition">Menunggu (Pending)</button>
            </div>
            <div class="flex items-center gap-2">
                <input type="month" class="text-xs font-bold text-gray-700 bg-gray-50 border border-gray-200 rounded-lg px-3 py-1.5 focus:ring-0 focus:border-black" value="2026-09">
            </div>
        </div>

        <!-- Transactions List -->
        <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-[10px] uppercase font-black tracking-widest text-gray-500 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4">ID Transaksi & Tanggal</th>
                            <th class="px-6 py-4">Detail Item</th>
                            <th class="px-6 py-4 text-right">Total Tagihan</th>
                            <th class="px-6 py-4 text-center">Status</th>
                            <th class="px-6 py-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($transactions as $transaction)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="px-6 py-5 align-top">
                                <div class="font-mono font-bold text-gray-900 mb-1">#INV-CFD-{{ str_pad($transaction->id, 5, '0', STR_PAD_LEFT) }}</div>
                                <div class="text-xs font-medium text-gray-500">{{ $transaction->created_at->format('d M Y, H:i') }} WIB</div>
                            </td>
                            <td class="px-6 py-5">
                                <div class="flex gap-3 items-center">
                                    <div class="w-12 h-12 bg-gray-100 rounded-lg overflow-hidden shrink-0 border border-gray-200">
                                        <img src="{{ Storage::url($transaction->photo->file_watermark ?? '') }}" alt="Item" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-900 text-xs mb-1 line-clamp-1">Lisensi Personal Foto #{{ str_pad($transaction->photo_id, 4, '0', STR_PAD_LEFT) }}</div>
                                        <div class="text-[10px] text-gray-500">Fotografer: {{ $transaction->photo->fotografer->name ?? 'Fotografer' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5 text-right align-top">
                                <div class="font-black text-gray-900">Rp{{ number_format($transaction->total_bayar, 0, ',', '.') }}</div>
                                <div class="text-[10px] text-gray-400 mt-1">Metode: QRIS</div>
                            </td>
                            <td class="px-6 py-5 text-center align-top">
                                @if($transaction->status == 'paid')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-green-50 text-green-700 text-[10px] font-bold border border-green-200/50 uppercase tracking-widest">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Lunas
                                </span>
                                @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-yellow-50 text-yellow-700 text-[10px] font-bold border border-yellow-200/50 uppercase tracking-widest">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Menunggu
                                </span>
                                @endif
                            </td>
                            <td class="px-6 py-5 text-right align-top">
                                @if($transaction->status == 'paid')
                                <div x-data="{ openInvoice: false }" class="inline-block text-left">
                                    <button @click="openInvoice = true" class="text-[10px] font-bold text-gray-600 hover:text-black uppercase tracking-wider inline-flex items-center gap-1 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        Invoice
                                    </button>

                                    <!-- Modal Invoice -->
                                    <template x-teleport="body">
                                        <div x-show="openInvoice" 
                                             class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-gray-900/60 backdrop-blur-sm"
                                             x-transition.opacity
                                             style="display: none;">
                                            <div @click.away="openInvoice = false" class="bg-white rounded-2xl shadow-2xl w-full max-w-xl max-h-[90vh] overflow-y-auto overflow-x-hidden flex flex-col">
                                                
                                                <!-- Invoice Header -->
                                                <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                                                    <div>
                                                        <h3 class="font-black text-lg text-gray-900 uppercase tracking-tight">Detail Invoice</h3>
                                                        <p class="text-xs text-gray-500 font-mono mt-1">#INV-CFD-{{ str_pad($transaction->id, 5, '0', STR_PAD_LEFT) }}</p>
                                                    </div>
                                                    <button @click="openInvoice = false" class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                    </button>
                                                </div>

                                                <!-- Invoice Body -->
                                                <div class="p-6 space-y-6">
                                                    <!-- Info -->
                                                    <div class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Ditagihkan Ke:</p>
                                                            <p class="text-sm font-bold text-gray-900">{{ request()->user()->name }}</p>
                                                            <p class="text-xs text-gray-500">{{ request()->user()->email }}</p>
                                                        </div>
                                                        <div class="text-right">
                                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Status:</p>
                                                            <div class="inline-flex px-2 py-0.5 bg-green-50 text-green-700 text-[10px] font-bold border border-green-200/50 uppercase tracking-widest rounded">
                                                                Lunas (QRIS)
                                                            </div>
                                                            <p class="text-[10px] text-gray-500 mt-1">{{ $transaction->created_at->format('d M Y, H:i') }}</p>
                                                        </div>
                                                    </div>

                                                    <!-- Items -->
                                                    <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                                                        <div class="flex justify-between items-start mb-2 border-b border-gray-200 pb-2">
                                                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Item</div>
                                                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total</div>
                                                        </div>
                                                        <div class="flex justify-between items-center py-2">
                                                            <div>
                                                                <p class="text-sm font-bold text-gray-900">Lisensi Personal Foto #{{ str_pad($transaction->photo_id, 4, '0', STR_PAD_LEFT) }}</p>
                                                                <p class="text-[10px] text-gray-500">{{ $transaction->photo->event->nama_event ?? 'Event' }}</p>
                                                            </div>
                                                            <p class="text-sm font-black text-gray-900">Rp{{ number_format($transaction->total_bayar, 0, ',', '.') }}</p>
                                                        </div>
                                                    </div>

                                                    <!-- Total -->
                                                    <div class="flex justify-between items-center py-3 border-t border-gray-900">
                                                        <span class="font-black text-gray-900 uppercase tracking-widest text-sm">Total Bayar</span>
                                                        <span class="font-black text-xl text-gray-900">Rp{{ number_format($transaction->total_bayar, 0, ',', '.') }}</span>
                                                    </div>
                                                </div>

                                                <!-- Actions -->
                                                <div class="p-6 border-t border-gray-100 bg-gray-50/50 flex gap-3 justify-end">
                                                    <button @click="openInvoice = false" class="px-5 py-2.5 bg-white border border-gray-200 rounded-lg text-xs font-bold text-gray-600 hover:bg-gray-50 transition-colors">
                                                        Tutup
                                                    </button>
                                                    <a href="{{ route('pembeli.invoice', ['transaction' => $transaction->id, 'print' => 1]) }}" target="_blank" class="bg-black hover:bg-gray-800 text-white font-bold px-5 py-2.5 rounded-lg text-xs flex items-center gap-2 transition-colors shadow-sm">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                                        Download PDF
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                @else
                                <button class="text-[10px] font-bold text-white bg-black hover:bg-gray-800 px-3 py-1.5 rounded uppercase tracking-wider inline-flex items-center gap-1 transition-colors">
                                    Bayar
                                </button>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border border-gray-100">
                                    <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </div>
                                <h3 class="text-sm font-bold text-gray-900 mb-1">Belum Ada Riwayat</h3>
                                <p class="text-xs text-gray-500">Anda belum pernah melakukan transaksi pembelian foto.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($transactions->count() > 0)
            <!-- Pagination Mock -->
            <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between bg-gray-50/50">
                <span class="text-xs text-gray-500 font-medium">Menampilkan 1-{{ $transactions->count() }} dari {{ $transactions->count() }} transaksi</span>
                <div class="flex gap-1">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-400 hover:text-black disabled:opacity-50" disabled>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-400 hover:text-black disabled:opacity-50" disabled>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
            @endif
        </div>
        
    </div>
</x-pembeli-layout>