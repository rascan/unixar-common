<?php

namespace Unixar\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Unixar\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'uuid' => str()->uuid(),
            'email' => fake()->email,
            'password' => Hash::make('Pass@w0rd1'),
            'email_verified_at' => now(),
        ];
    }
}
