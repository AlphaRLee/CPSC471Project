<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Accounting',
                'location' => 'Calgary',
                'secretary_ssn' => '101101002',
                'manager_ssn' => '101101003'
            ],
            [
                'name' => 'Sales',
                'location' => 'Calgary',
                'secretary_ssn' => '202202002',
                'manager_ssn' => '202202003'
            ],
            [
                'name' => 'Marketing',
                'location' => 'Calgary',
                'secretary_ssn' => '303303002',
                'manager_ssn' => '303303003'
            ],
            [
                'name' => 'Human Resource',
                'location' => 'Calgary',
                'secretary_ssn' => '404404002',
                'manager_ssn' => '404404003'
            ],
            [
                'name' => 'Engineering',
                'location' => 'Calgary',
                'secretary_ssn' => '505505002',
                'manager_ssn' => '505505003'
            ],
            [
                'name' => 'Research and Development',
                'location' => 'Calgary',
                'secretary_ssn' => '606606002',
                'manager_ssn' => '606606003'
            ],
            [
                'name' => 'Information Technology',
                'location' => 'Calgary',
                'secretary_ssn' => '707707002',
                'manager_ssn' => '707707003'
            ],
            [
                'name' => 'Management',
                'location' => 'Calgary',
                'secretary_ssn' => '808808002',
                'manager_ssn' => '808808003'
            ],
            [
                'name' => 'Finance',
                'location' => 'Calgary',
                'secretary_ssn' => '909909002',
                'manager_ssn' => '909909003'
            ],
        ];

        foreach ($departments as $department) {
            App\Department::create($department);
        }
    }
}
