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
        Schema::create('tarifs', function (Blueprint $table) {
            $table->id();
            
            // Kolom untuk nama item (e.g., 'Perorangan', 'Roda 2', 'Roda 4')
            $table->string('item_name')->unique(); 
            
            // Kolom untuk harga pada hari kerja (Weekday)
            // Menggunakan integer karena harga biasanya bilangan bulat
            $table->integer('price_weekday'); 
            
            // Kolom untuk harga pada akhir pekan atau hari libur (Weekend/Holiday)
            $table->integer('price_weekend');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarifs');
    }
};