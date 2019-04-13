<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $employees = [
            [
                'ssn' => '101101001',
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
                'ssn' => '101101002',
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
                'ssn' => '101101003',
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
            [
                'ssn' => '202202002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 2,
            ],
            [
                'ssn' => '202202003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 2,
            ],
            [
                'ssn' => '303303002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 3,
            ],
            [
                'ssn' => '303303003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 3,
            ],
            [
                'ssn' => '404404002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 4,
            ],
            [
                'ssn' => '404404003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 4,
            ],
            [
                'ssn' => '505505002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 5,
            ],
            [
                'ssn' => '505505003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 5,
            ],
            [
                'ssn' => '606606002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 6,
            ],
            [
                'ssn' => '606606003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 6,
            ],
            [
                'ssn' => '707707002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 7,
            ],
            [
                'ssn' => '707707003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 7,
            ],
            [
                'ssn' => '808808002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 8,
            ],
            [
                'ssn' => '808808003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 8,
            ],
            [
                'ssn' => '909909001',
                'first_name' => 'Frank',
                'last_name' => 'Eves',
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 9,
            ],
            [
                'ssn' => '909909002',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 9,
            ],
            [
                'ssn' => '909909003',
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastName,
                'dob' => '1970-01-01',
                'gender' => 'male',
                'address' => $faker->streetAddress,
                'postal_code' => 'a1a1a1',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'department_id' => 9,
            ],
        ];

        foreach ($employees as $employee) {
            App\Employee::create($employee);

            App\User::create([
                'email' => strtolower($employee['first_name'] . '.' . $employee['last_name']) . '@test.com',
                'password' => '$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC', // 12345678
                'employee_ssn' => $employee['ssn'],
            ]);

            if (substr($employee['ssn'], -1) === '2') {
                App\Secretary::create([
                    'ssn' => $employee['ssn'],
                    'office' => substr($employee['ssn'], 0, 3) . 'b'
                ]);
            } else if (substr($employee['ssn'], -1) === '3') {
                App\Manager::create([
                    'ssn' => $employee['ssn'],
                    'office' => substr($employee['ssn'], 0, 3) . 'c'
                ]);
            }

            if ($employee['department_id'] == 9) {
                App\FinancialExpert::create([
                    'ssn' => $employee['ssn'],
                    'office' => '909z'
                ]);
            }
        }
    }
}
