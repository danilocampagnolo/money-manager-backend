<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\TransactionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->numberBetween(1000, 10000),
            'created_at' => $this->faker->date(),
            'description' => $this->faker->text(100),
            'category_id' => Category::all()->random()->id,
            'subcategory_id' => Subcategory::all()->random()->id,
            'transaction_type' => TransactionType::all()->random()->id,
            'account_id' => Account::all()->random()->id,
        ];
    }
}
