<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Akun Admin Utama untuk Login
        User::factory()->create([
            'name' => 'Rafael Nuansa',
            'email' => 'rafael@dev.test',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // 2. Buat 50 User Dummy Tambahan
        User::factory(50)->create();
    }
}