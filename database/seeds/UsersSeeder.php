<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'john.smith@test.com',
                'password' => '$10$a7kbTCnFN0toYiFBM2UhS.IKC4rG2UxDLCRWkVNdALa0rgZnwJEK2',
                'employee_ssn' => '101101001'
            ],
            [
                'email' => 'jane.doe@test.com',
                'password' => '$10$a7kbTCnFN0toYiFBM2UhS.IKC4rG2UxDLCRWkVNdALa0rgZnwJEK2',
                'employee_ssn' => '101101002'
            ],
            [
                'email' => 'jack.jones@test.com',
                'password' => '$10$a7kbTCnFN0toYiFBM2UhS.IKC4rG2UxDLCRWkVNdALa0rgZnwJEK2',
                'employee_ssn' => '101101003'
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'email' => $user['email'],
                'password' => $user['password'],
                'employee_ssn' => user['employee_ssn'],
            ]);
        }
    }
}
