<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Photo;
use App\Models\Transaction;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Packages
        $package = Package::firstOrCreate(
            ['nama_paket' => 'Basic'],
            ['harga' => 0, 'kuota_storage_mb' => 5000, 'bisa_custom_watermark' => false, 'bisa_broadcast_lokasi' => false]
        );

        $proPackage = Package::firstOrCreate(
            ['nama_paket' => 'Pro'],
            ['harga' => 150000, 'kuota_storage_mb' => 50000, 'bisa_custom_watermark' => true, 'bisa_broadcast_lokasi' => true]
        );

        // Admins
        User::firstOrCreate(
            ['email' => 'superadmin@jepret.test'],
            ['name' => 'Super Admin', 'password' => bcrypt('password'), 'role' => 'superadmin']
        );

        // Fotografer 1
        $fg1 = User::firstOrCreate(
            ['email' => 'fotografer@jepret.test'],
            ['name' => 'Fajar Lensa Runners', 'password' => bcrypt('password'), 'role' => 'fotografer', 'package_id' => $proPackage->id]
        );

        // Fotografer 2
        $fg2 = User::firstOrCreate(
            ['email' => 'foto2@jepret.test'],
            ['name' => 'Dwi Visual', 'password' => bcrypt('password'), 'role' => 'fotografer', 'package_id' => $package->id]
        );

        // Pembeli
        $pembeli1 = User::firstOrCreate(
            ['email' => 'pembeli@jepret.test'],
            ['name' => 'Budi Santoso (Runner)', 'password' => bcrypt('password'), 'role' => 'pembeli']
        );

        $pembeli2 = User::firstOrCreate(
            ['email' => 'pembeli2@jepret.test'],
            ['name' => 'Andi Sepeda (Cyclist)', 'password' => bcrypt('password'), 'role' => 'pembeli']
        );

        // Events
        $eventsData = [
            ['nama_event' => 'CFD Sudirman (Gelora Bung Karno)', 'lokasi' => 'Jakarta', 'fotografer_id' => $fg1->id, 'tanggal_event' => now()->subDays(2)],
            ['nama_event' => 'Banjarmasin Marathon 2026', 'lokasi' => 'Banjarmasin', 'fotografer_id' => $fg2->id, 'tanggal_event' => now()->subDays(5)],
            ['nama_event' => 'Gravel Bike Festival', 'lokasi' => 'Bandung', 'fotografer_id' => $fg1->id, 'tanggal_event' => now()->subDays(10)],
        ];

        $events = [];
        foreach($eventsData as $ed) {
            $events[] = Event::firstOrCreate(
                ['nama_event' => $ed['nama_event'], 'fotografer_id' => $ed['fotografer_id']],
                $ed
            );
        }

        // Photos (Dummy URL Unsplash)
        $photoImages = [
            'https://images.unsplash.com/photo-1552674605-15c2145eba11?w=800&q=80',
            'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?w=800&q=80',
            'https://images.unsplash.com/photo-1517649763962-0c623066013b?w=800&q=80',
            'https://images.unsplash.com/photo-1571008887538-b36bb32f4571?w=800&q=80',
            'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=800&q=80',
            'https://images.unsplash.com/photo-1530143311094-34d807799e8f?w=800&q=80',
        ];

        $photos = [];
        for ($i=0; $i<12; $i++) {
            $event = $events[array_rand($events)];
            $photos[] = Photo::create([
                'event_id' => $event->id,
                'fotografer_id' => $event->fotografer_id,
                'file_asli' => $photoImages[array_rand($photoImages)],
                'file_watermark' => $photoImages[array_rand($photoImages)],
                'harga' => rand(15, 50) * 1000,
                'kamera_body' => 'Sony A7 IV',
                'lensa' => 'FE 70-200mm f/2.8 GM',
                'eksposur' => '1/1000s, f/2.8, ISO 160',
                'focal_length' => '200mm',
                'resolusi' => '8192x5464',
            ]);
        }

        // Transactions (Dummy Orders)
        for ($i=0; $i<5; $i++) {
            $photo = $photos[array_rand($photos)];
            Transaction::create([
                'pembeli_id' => $pembeli1->id,
                'photo_id' => $photo->id,
                'harga_foto' => $photo->harga,
                'total_bayar' => $photo->harga,
                'status' => 'paid',
            ]);
        }
    }
}
