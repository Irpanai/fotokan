<?php
use App\Models\User;
use App\Models\Event;
use App\Models\Photo;
use App\Models\Transaction;
use App\Models\Package;

// Dapatkan paket yang ada
$basicPackage = Package::where('nama_paket', 'Basic')->first();
$proPackage = Package::where('nama_paket', 'Pro')->first();

// 1. Fotografer Basic
$fotoBasic = User::updateOrCreate(
    ['email' => 'fotografer_basic@jepret.test'],
    [
        'name' => 'Fajar Basic (Pemula)', 
        'password' => bcrypt('password'), 
        'role' => 'fotografer',
        'is_verified' => true,
        'saldo' => 150000,
        'package_id' => $basicPackage?->id
    ]
);

// 2. Fotografer Pro
$fotoPro = User::updateOrCreate(
    ['email' => 'fotografer_pro@jepret.test'],
    [
        'name' => 'Rina Pro (Agensi)', 
        'password' => bcrypt('password'), 
        'role' => 'fotografer',
        'is_verified' => true,
        'saldo' => 4500000,
        'package_id' => $proPackage?->id
    ]
);

// 3. Pembeli Premium / Kolektor
$pembeliVip = User::updateOrCreate(
    ['email' => 'pembeli_vip@jepret.test'],
    [
        'name' => 'Kolektor Event', 
        'password' => bcrypt('password'), 
        'role' => 'pembeli'
    ]
);

$pembeliBiasa = User::updateOrCreate(
    ['email' => 'pembeli2@jepret.test'],
    [
        'name' => 'Peserta Fun Run', 
        'password' => bcrypt('password'), 
        'role' => 'pembeli'
    ]
);

// Buat Event untuk Fotografer Basic
$eventBasic = Event::firstOrCreate(
    ['nama_event' => 'CFD Sudirman 2026', 'fotografer_id' => $fotoBasic->id],
    ['lokasi' => 'Sudirman, Jakarta', 'tanggal_event' => now()->subDays(2)->format('Y-m-d')]
);

// Buat Event untuk Fotografer Pro
$eventPro = Event::firstOrCreate(
    ['nama_event' => 'Bali International Marathon 2026', 'fotografer_id' => $fotoPro->id],
    ['lokasi' => 'Bali', 'tanggal_event' => now()->subDays(1)->format('Y-m-d')]
);

// Generate foto & transaksi untuk Fotografer Basic
if (Photo::where('fotografer_id', $fotoBasic->id)->count() < 3) {
    for ($i = 1; $i <= 3; $i++) {
        $photo = Photo::create([
            'event_id' => $eventBasic->id,
            'fotografer_id' => $fotoBasic->id,
            'file_asli' => 'photos/original/basic' . $i . '.jpg',
            'file_watermark' => 'photos/watermark/basic' . $i . '.jpg',
            'harga' => 15000,
            'ai_tags' => json_encode(['sepeda', 'jersey kuning'])
        ]);
        
        Transaction::create([
            'pembeli_id' => $pembeliBiasa->id,
            'photo_id' => $photo->id,
            'harga_foto' => $photo->harga,
            'tip_amount' => 0,
            'total_bayar' => $photo->harga,
            'status' => 'paid',
        ]);
    }
}

// Generate foto & transaksi untuk Fotografer Pro
if (Photo::where('fotografer_id', $fotoPro->id)->count() < 5) {
    for ($i = 1; $i <= 5; $i++) {
        $photo = Photo::create([
            'event_id' => $eventPro->id,
            'fotografer_id' => $fotoPro->id,
            'file_asli' => 'photos/original/pro' . $i . '.jpg',
            'file_watermark' => 'photos/watermark/pro' . $i . '.jpg',
            'harga' => 50000,
            'ai_tags' => json_encode(['marathon', 'bib ' . rand(100, 999), 'finish line'])
        ]);
        
        // Pembeli VIP beli semua foto Pro dengan tip besar
        Transaction::create([
            'pembeli_id' => $pembeliVip->id,
            'photo_id' => $photo->id,
            'harga_foto' => $photo->harga,
            'tip_amount' => 25000, // Tip besar dari sultan
            'total_bayar' => $photo->harga + 25000,
            'status' => 'paid',
        ]);
    }
}

echo "Berhasil membuat variasi akun dan transaksi!\n";
