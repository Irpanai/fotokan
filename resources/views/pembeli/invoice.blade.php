<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice #INV-CFD-{{ str_pad($transaction->id, 5, '0', STR_PAD_LEFT) }}</title>
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans text-gray-900 py-10 antialiased">
    
    <div class="max-w-2xl mx-auto bg-white shadow-lg p-10 border border-gray-200">
        
        <!-- Header -->
        <div class="flex justify-between items-start mb-12">
            <div>
                <div class="font-black text-2xl tracking-tighter uppercase flex items-center gap-2 mb-1">
                    <div class="w-8 h-8 bg-black rounded-full flex items-center justify-center shrink-0">
                        <span class="text-white font-black text-sm">J</span>
                    </div>
                    JEPRET
                </div>
                <p class="text-xs text-gray-500 font-medium">Platform Fotografi Olahraga & Acara</p>
            </div>
            <div class="text-right">
                <h2 class="text-xl font-black text-gray-900 uppercase tracking-widest mb-1">Invoice</h2>
                <p class="text-sm font-mono text-gray-500">#INV-CFD-{{ str_pad($transaction->id, 5, '0', STR_PAD_LEFT) }}</p>
                <div class="inline-flex mt-2 px-2.5 py-1 bg-green-50 text-green-700 text-[10px] font-bold border border-green-200/50 uppercase tracking-widest">
                    Lunas (Paid)
                </div>
            </div>
        </div>

        <!-- Info Grid -->
        <div class="grid grid-cols-2 gap-8 border-b border-gray-100 pb-8 mb-8">
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">Ditagihkan Kepada:</p>
                <h3 class="text-sm font-bold text-gray-900 mb-1">{{ request()->user()->name }}</h3>
                <p class="text-xs text-gray-500">{{ request()->user()->email }}</p>
            </div>
            <div class="text-right">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">Detail Pembayaran:</p>
                <p class="text-xs text-gray-900 font-medium mb-1"><span class="text-gray-500">Tanggal:</span> {{ $transaction->created_at->format('d F Y, H:i') }} WIB</p>
                <p class="text-xs text-gray-900 font-medium mb-1"><span class="text-gray-500">Metode:</span> QRIS</p>
                <p class="text-xs text-gray-900 font-medium"><span class="text-gray-500">ID Transaksi:</span> {{ $transaction->id }}</p>
            </div>
        </div>

        <!-- Order Items -->
        <div class="mb-12">
            <table class="w-full text-left">
                <thead class="border-b border-gray-200">
                    <tr>
                        <th class="py-3 text-[10px] font-black text-gray-400 uppercase tracking-widest w-2/3">Deskripsi Item</th>
                        <th class="py-3 text-[10px] font-black text-gray-400 uppercase tracking-widest text-center">Jumlah</th>
                        <th class="py-3 text-[10px] font-black text-gray-400 uppercase tracking-widest text-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="py-4">
                            <p class="text-sm font-bold text-gray-900 mb-1">Lisensi Personal Foto #{{ str_pad($transaction->photo_id, 4, '0', STR_PAD_LEFT) }}</p>
                            <p class="text-[10px] text-gray-500">Fotografer: {{ $transaction->photo->fotografer->name ?? 'Dwi Visual' }} | Event: {{ $transaction->photo->event->nama_event ?? 'Car Free Day' }}</p>
                        </td>
                        <td class="py-4 text-center text-sm text-gray-600">1</td>
                        <td class="py-4 text-right text-sm font-bold text-gray-900">Rp{{ number_format($transaction->total_bayar, 0, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Totals -->
        <div class="flex justify-end border-b border-gray-200 pb-8 mb-8">
            <div class="w-1/2">
                <div class="flex justify-between py-2 text-sm">
                    <span class="text-gray-500">Subtotal</span>
                    <span class="font-bold text-gray-900">Rp{{ number_format($transaction->total_bayar, 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between py-2 text-sm">
                    <span class="text-gray-500">Pajak (0%)</span>
                    <span class="font-bold text-gray-900">Rp0</span>
                </div>
                <div class="flex justify-between py-3 border-t border-gray-900 mt-2">
                    <span class="font-black text-gray-900 uppercase tracking-widest">Total Bayar</span>
                    <span class="font-black text-xl text-gray-900">Rp{{ number_format($transaction->total_bayar, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center">
            <p class="text-[10px] font-medium text-gray-400 mb-2">Terima kasih telah berbelanja di JEPRET.</p>
            <p class="text-[10px] font-medium text-gray-400">Invoice ini sah dan dicetak secara otomatis oleh sistem.</p>
        </div>
        
    </div>

    <!-- Actions (No Print) -->
    <div class="max-w-2xl mx-auto mt-6 flex justify-between px-2 no-print">
        <button onclick="window.close()" class="text-sm font-bold text-gray-500 hover:text-black transition-colors flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            Tutup
        </button>
        <button onclick="window.print()" class="bg-black hover:bg-gray-800 text-white font-bold px-6 py-2 rounded-lg text-sm transition-colors shadow-sm flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            Cetak / Simpan PDF
        </button>
    </div>

    @if(request()->has('print'))
    <script>
        window.onload = function() {
            setTimeout(function() {
                window.print();
            }, 500);
        };
    </script>
    @endif

</body>
</html>
