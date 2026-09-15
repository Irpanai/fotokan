<?php
use App\Models\User;
use App\Models\Event;
use App\Models\Photo;
use App\Models\Transaction;

// Buat akun Fotografer
$fotografer = User::firstOrCreate(
    ['email' => 'fotografer@jepret.test'],
    [
        'name' => 'Budi Fotografer', 
        'password' => bcrypt('password'), 
        'role' => 'fotografer',
        'is_verified' => true,
        'saldo' => 500000
    ]
);

// Buat akun Pembeli
$pembeli = User::firstOrCreate(
    ['email' => 'pembeli@jepret.test'],
    [
        'name' => 'Andi Pembeli', 
        'password' => bcrypt('password'), 
        'role' => 'pembeli'
    ]
);

// Pastikan ada event
$event = Event::firstOrCreate(
    ['nama_event' => 'Jakarta Marathon 2026', 'fotografer_id' => $fotografer->id],
    ['lokasi' => 'GBK Jakarta', 'tanggal_event' => now()->format('Y-m-d')]
);

// Cek apakah fotografer punya foto
if (Photo::where('fotografer_id', $fotografer->id)->count() < 3) {
    for ($i = 1; $i <= 3; $i++) {
        $photo = Photo::create([
            'event_id' => $event->id,
            'fotografer_id' => $fotografer->id,
            'file_asli' => 'photos/original/dummy' . $i . '.jpg',
            'file_watermark' => 'photos/watermark/dummy' . $i . '.jpg',
            'harga' => 35000,
            'ai_tags' => json_encode(['pelari', 'bib ' . rand(100, 999)])
        ]);
        
        // Buat transaksi untuk pembeli ini
        Transaction::create([
            'pembeli_id' => $pembeli->id,
            'photo_id' => $photo->id,
            'harga_foto' => $photo->harga,
            'tip_amount' => 5000,
            'total_bayar' => $photo->harga + 5000,
            'status' => 'paid',
        ]);
    }
}

echo "Kredensial berhasil dibuat!\n";
