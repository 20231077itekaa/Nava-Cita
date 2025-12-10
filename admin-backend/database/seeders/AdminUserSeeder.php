<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kredensial Admin yang akan dibuat
        $adminEmail = 'admin@pantaimanggar.com';
        $adminPassword = 'Adminmanggar_itk2025!'; // <--- GANTI dengan password yang kuat!
        
        // Cek apakah akun admin sudah ada
        if (User::where('email', $adminEmail)->doesntExist()) {
            User::create([
                'name' => 'Administrator Pantai Manggar',
                'email' => $adminEmail,
                'password' => Hash::make($adminPassword), // Password dienkripsi
            ]);

            $this->command->info("Akun Admin berhasil dibuat:");
            $this->command->info("- Email: {$adminEmail}");
            $this->command->info("- Password: {$adminPassword}");
        } else {
            $this->command->warn('Akun Admin sudah ada.');
        }
    }
}