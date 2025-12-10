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
        Schema::table('fotos', function (Blueprint $table) {
            // Cek dulu apakah kolom sudah ada sebelum menambah
            if (!Schema::hasColumn('fotos', 'path')) {
                $table->string('path')->after('id');
            }
            
            if (!Schema::hasColumn('fotos', 'judul')) {
                $table->string('judul')->after('path');
            }
            
            if (!Schema::hasColumn('fotos', 'caption')) {
                $table->text('caption')->nullable()->after('judul');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fotos', function (Blueprint $table) {
            // Hanya drop kolom jika ada
            if (Schema::hasColumn('fotos', 'path')) {
                $table->dropColumn('path');
            }
            if (Schema::hasColumn('fotos', 'judul')) {
                $table->dropColumn('judul');
            }
            if (Schema::hasColumn('fotos', 'caption')) {
                $table->dropColumn('caption');
            }
        });
    }
};