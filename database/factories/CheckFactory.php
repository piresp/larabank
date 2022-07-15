<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;

class CheckFactory extends Factory
{
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(1000, 9000),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'account_id' => $this->faker->numberBetween(1, Account::count())
        ];
    }
}
