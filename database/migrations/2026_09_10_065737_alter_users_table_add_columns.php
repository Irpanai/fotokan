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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['superadmin', 'fotografer', 'pembeli'])->default('pembeli');
            $table->integer('saldo')->default(0);
            $table->foreignId('package_id')->nullable()->constrained('packages')->nullOnDelete();
            $table->integer('storage_terpakai_mb')->default(0);
            $table->string('custom_watermark_path')->nullable();
            $table->boolean('is_verified')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['package_id']);
            $table->dropColumn(['role', 'saldo', 'package_id', 'storage_terpakai_mb', 'custom_watermark_path', 'is_verified']);
        });
    }
};
