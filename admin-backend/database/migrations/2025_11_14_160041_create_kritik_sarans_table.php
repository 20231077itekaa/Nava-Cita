<?php
// database/migrations/2025_11_15_xxxxxx_create_kritik_sarans_table_fixed.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Hapus table jika sudah ada dengan struktur salah
        if (Schema::hasTable('kritik_sarans')) {
            Schema::dropIfExists('kritik_sarans');
        }

        // Buat table baru dengan struktur yang benar
        Schema::create('kritik_sarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kontak');
            $table->enum('jenis', ['Kritik', 'Saran', 'Pertanyaan']);
            $table->text('pesan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kritik_sarans');
    }
};