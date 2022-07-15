<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    public function definition()
    {
        return [
            'description' => $this->faker->word(),
            'amount' => $this->faker->numberBetween(100, 1000),
            'account_id' => $this->faker->numberBetween(1, Account::count()),
            'number' => Account::select('number')->inRandomOrder()->limit(1)->get()->pluck('number')->implode(' ', 'number')
        ];
    }
}
