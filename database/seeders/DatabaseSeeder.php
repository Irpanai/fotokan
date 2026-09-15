<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Photo;
use App\Models\Transaction;
use App\Models\Package;
use App\Models\Withdrawal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Admins
        User::firstOrCreate(
            ['email' => 'superadmin@jepret.test'],
            ['name' => 'Super Admin', 'password' => bcrypt('password'), 'role' => 'superadmin']
        );

        // Packages
        $basic = Package::firstOrCreate(['nama_paket' => 'Basic'], ['harga' => 0, 'kuota_storage_mb' => 5000, 'bisa_custom_watermark' => false, 'bisa_broadcast_lokasi' => false]);
        $pro = Package::firstOrCreate(['nama_paket' => 'Pro'], ['harga' => 99000, 'kuota_storage_mb' => 50000, 'bisa_custom_watermark' => true, 'bisa_broadcast_lokasi' => true]);

        // Fotografer
        $fotografer = User::factory()->count(10)->fotografer()->create();
        
        // Unverified Fotografer (Pending KYC) for Compliance Module
        $pendingFotografer = User::factory()->count(5)->fotografer()->unverified()->create([
            'saldo' => 0,
            'storage_terpakai_mb' => 0,
        ]);

        // Pembeli
        $pembeli = User::factory()->count(20)->pembeli()->create();

        // Events
        $events = Event::factory()->count(15)->recycle($fotografer)->create();

        // Photos
        $photos = Photo::factory()->count(100)->recycle($events)->recycle($fotografer)->create();

        // Transactions (Ledger)
        Transaction::factory()->count(200)->recycle($pembeli)->recycle($photos)->create();

        // Withdrawals
        Withdrawal::factory()->count(15)->recycle($fotografer)->create();
    }
}
