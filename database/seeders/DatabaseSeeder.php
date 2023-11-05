<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use App\Models\Budget;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Transaction;
use App\Models\TransactionType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = ['Auto', 'Casa', 'Alimentari'];
        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category,
            ]);
        }

        $subcategories = ['Affitto', 'Mangiare fuori', 'Spesa', 'Vestiti', 'Metano', 'Benzina'];
        foreach ($subcategories as $subcategory) {
            Subcategory::factory()->create([
                'name' => $subcategory,
            ]);
        }

        $types = ['expense', 'income'];
        foreach ($types as $type) {
            TransactionType::factory()->create([
                'name' => $type,
            ]);
        }

        Account::factory()->count(2)->create();
        Budget::factory()->count(2)->create();
        Transaction::factory()->count(100)->create();
    }
}
