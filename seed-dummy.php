<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$u = App\Models\User::firstOrCreate(
    ['email' => 'foto@jepret.test'],
    ['name' => 'Dwi Visual', 'password' => bcrypt('password'), 'role' => 'fotografer']
);

$e = App\Models\Event::firstOrCreate(
    ['nama_event' => 'Banjarmasin Marathon', 'lokasi' => 'Banjarmasin', 'fotografer_id' => $u->id, 'tanggal_event' => now()]
);

$p = App\Models\Photo::firstOrCreate(
    ['event_id' => $e->id, 'fotografer_id' => $u->id],
    ['file_asli' => 'dummy.jpg', 'file_watermark' => 'dummy.jpg', 'harga' => 20000]
);

echo 'OK PHOTO ID: ' . $p->id;
