<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure Basic Package exists
        $package = \App\Models\Package::firstOrCreate(
            ['nama_paket' => 'Basic'],
            ['harga' => 0, 'kuota_storage_mb' => 5000, 'bisa_custom_watermark' => false, 'bisa_broadcast_lokasi' => false]
        );

        \App\Models\User::firstOrCreate(
            ['email' => 'superadmin@jepret.test'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'role' => 'superadmin',
            ]
        );

        \App\Models\User::firstOrCreate(
            ['email' => 'fotografer@jepret.test'],
            [
                'name' => 'Fotografer Demo',
                'password' => bcrypt('password'),
                'role' => 'fotografer',
                'package_id' => $package->id,
            ]
        );

        \App\Models\User::firstOrCreate(
            ['email' => 'pembeli@jepret.test'],
            [
                'name' => 'Pembeli Demo',
                'password' => bcrypt('password'),
                'role' => 'pembeli',
            ]
        );
    }
}
