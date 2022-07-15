<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class AccountFactory extends Factory
{
    public function definition()
    {
        return [
            'balance' => 0,
            'status' => 1,
            'number' => $this->faker->numberBetween(1000000, 9000000),
            'user_id' => $this->faker->numberBetween(1, User::count())
        ];
    }
}