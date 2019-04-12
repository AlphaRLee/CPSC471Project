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
                'description' => 'Food and Beverage'
            ],
            [
                'description' => 'Gifts'
            ],
            [
                'description' => 'Local Travel'
            ],
            [
                'description' => 'Non-local Travel'
            ],
            [
                'description' => 'Lodging'
            ],
            [
                'description' => 'Vehicle and Gas Usage'
            ],
            [
                'description' => 'Supplies'
            ],
            [
                'description' => 'Equipment'
            ],
            [
                'description' => 'Maintenance'
            ],
            [
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
