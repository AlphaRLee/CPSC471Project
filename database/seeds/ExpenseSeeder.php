<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Expense;
use App\ExpenseCode;
use App\ExpenseStatus;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get list of applicable employees who can submit and acceptable expense code
        $employees = Employee::all();
        $expenseCodes = ExpenseCode::all();

        $photos = [
            'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/ReceiptSwiss.jpg/170px-ReceiptSwiss.jpg',
            'http://project-swatch.com/wp-content/uploads/2014/01/target-receipt.jpg',
            'https://media-cdn.tripadvisor.com/media/photo-s/06/f1/27/bd/bill-full-price-no-discount.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXPD1RaF1wzTx85eCQPsNjalPhZYG0bzFWT-muMLxJ7EoPzGwr',
            'http://d2lkv2j4m042s95gkf28dijm.wpengine.netdna-cdn.com/wp-content/uploads/2013/01/IMG_1623.jpg',
            'https://s3-media3.fl.yelpcdn.com/bphoto/EkRa7Fhu8ZgwBVcLqMkq4A/o.jpg',
            'https://myjourneywithdepression.com/t/2018/12/all-receipts-photo-a-payment-receipt-includes-the-information-collected-during-the-transaction-the-subtotal-as-well-as-any-applicable-tips-tadiscounts.jpg',
            'https://media-cdn.tripadvisor.com/media/photo-s/0d/c7/de/dc/the-receipt.jpg',
            'http://4.bp.blogspot.com/-PjDG1C17gZU/T6EuocgcdPI/AAAAAAAAEUo/iFON3DJxAiI/s1600/DSC01715.JPG',
        ];

        for ($i = 0; $i < 20; $i++) {
            $employeeIndex = mt_rand(1, count($employees) - 1);
            $expenseCodeIndex = mt_rand(1, count($expenseCodes) - 1);
            $photoIndex = mt_rand(0, count($photos) - 1);
            Expense::create([
                'employee_ssn' => $employees[$employeeIndex]->ssn,
                'code_id' => $expenseCodes[$expenseCodeIndex]->id,
                'status' => ExpenseStatus::SUBMITTED,
                'photo' => $photos[$photoIndex],
            ]);
        }
    }
}
