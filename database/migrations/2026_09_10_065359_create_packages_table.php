<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->enum('nama_paket', ['Basic', 'Pro'])->default('Basic');
            $table->integer('harga')->default(0);
            $table->integer('kuota_storage_mb')->default(5000);
            $table->boolean('bisa_custom_watermark')->default(false);
            $table->boolean('bisa_broadcast_lokasi')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
