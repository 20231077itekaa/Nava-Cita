<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kritik_sarans', function (Blueprint $table) {
            // Hapus kolom yang salah jika ada
            if (Schema::hasColumn('kritik_sarans', 'name')) {
                $table->dropColumn('name');
            }
            if (Schema::hasColumn('kritik_sarans', 'contact')) {
                $table->dropColumn('contact');
            }
            if (Schema::hasColumn('kritik_sarans', 'category')) {
                $table->dropColumn('category');
            }
            
            // Tambahkan kolom yang benar jika belum ada
            if (!Schema::hasColumn('kritik_sarans', 'nama')) {
                $table->string('nama')->after('id');
            }
            if (!Schema::hasColumn('kritik_sarans', 'kontak')) {
                $table->string('kontak')->after('nama');
            }
            if (!Schema::hasColumn('kritik_sarans', 'jenis')) {
                $table->enum('jenis', ['Kritik', 'Saran', 'Pertanyaan'])->after('kontak');
            }
            if (!Schema::hasColumn('kritik_sarans', 'pesan')) {
                $table->text('pesan')->after('jenis');
            }
        });
    }

    public function down(): void
    {
        Schema::table('kritik_sarans', function (Blueprint $table) {
            // Untuk rollback, kembalikan ke struktur lama
            $table->dropColumn(['nama', 'kontak', 'jenis', 'pesan']);
        });
    }
};