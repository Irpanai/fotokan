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
        Schema::table('photos', function (Blueprint $table) {
            $table->string('kamera_body')->nullable();
            $table->string('lensa')->nullable();
            $table->string('eksposur')->nullable();
            $table->string('focal_length')->nullable();
            $table->string('resolusi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->dropColumn(['kamera_body', 'lensa', 'eksposur', 'focal_length', 'resolusi']);
        });
    }
};
