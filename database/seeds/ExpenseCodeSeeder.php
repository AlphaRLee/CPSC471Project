<?php

use Illuminate\Database\Seeder;
use App\ExpenseCode;

class ExpenseCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expenseCodes = [
            [
                // 'id' => 1,
                'description' => 'Food and Beverage'
            ],
            [
                // 'id' => 2,
                'description' => 'Gifts'
            ],
            [
                // 'id' => 3,
                'description' => 'Local Travel'
            ],
            [
                // 'id' => 4,
                'description' => 'Non-local Travel'
            ],
            [
                // 'id' => 4,
                'description' => 'Lodging'
            ],
            [
                // 'id' => 5,
                'description' => 'Vehicle and Gas Usage'
            ],
            [
                // 'id' => 6,
                'description' => 'Supplies'
            ],
            [
                // 'id' => 7,
                'description' => 'Equipment'
            ],
            [
                // 'id' => 8,
                'description' => 'Maintenance'
            ],
            [
                // 'id' => 8,
                'description' => 'Miscellanious'
            ],
        ];

        foreach ($expenseCodes as $expenseCode) {
            ExpenseCode::create([
                // 'id' => $expenseCode['id'],
                'description' => $expenseCode['description'],
            ]);
        }
    }
}
