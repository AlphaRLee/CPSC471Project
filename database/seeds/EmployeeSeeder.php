<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                ssn = '101101001',
                'first_name' => 'John',
                'last_name' => 'Smith',
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => '24 Sussex Drive',
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 1,
            ],
            [
                ssn = '101101002',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'dob' => '1970-01-01',
                'gender' => 'female',
                'address' => '24 Sussex Drive',
                'postal_code' => 'b2b2b2',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 1,
            ],
            [
                ssn = '101101003',
                'first_name' => 'Jack',
                'last_name' => 'Jones',
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => '24 Sussex Drive',
                'postal_code' => 'c3c3c3',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 1,
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create([
                'ssn' => $employee['ssn'],
                'first_name' => $employee['first_name'],
                'last_name' => $employee['last_name'],
                'dob' => $employee['dob'],
                'gender' => $employee['gender'],
                'address' => $employee['address'],
                'postal_code' => $employee['postal_code'],
                'city' => $employee['city'],
                'province' => $employee['province'],
                'country' => $employee['country'],
                'department_id' => $employee['department_id'],
            ]);
        }
    }
}
