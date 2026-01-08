<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => fake()->boolean(80) ? now() : null, // 80% kemungkinan terverifikasi
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'), // Tanggal acak dalam 1 tahun terakhir
            'updated_at' => function (array $attributes) {
                return $attributes['created_at'];
            },
        ];
    }
}