<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Pastikan AdminUserSeeder sudah diimpor
use Database\Seeders\AdminUserSeeder; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder untuk membuat akun Admin
        $this->call(AdminUserSeeder::class);
    }
}