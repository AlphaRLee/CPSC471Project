<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'ssn' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            // 'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'employee_ssn' => $data['ssn'],
        ]);

/*
        Employee::create([
            'ssn' => $data['ssn'],
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],

            // FIXME Use real data
            'dob' => '1970-01-01',
            'gender' => 'male',
            'address' => '24 Sussex Drive',
            'postal_code' => 'a1a1a1',
            'city' => 'Calgary',
            'province' => 'Alberta',
            'country' => 'Canada',
            'department_id' => 1,

            $table->string('gender', 10);
            $table->string('address');
            $table->string('postal_code', 7);
            $table->string('city');
            $table->string('province');
            $table->string('country');

            $table->bigInteger('department_id')->foreign('department_id')->references('id')->on('department');



        ]);
*/
        return $user;
    }
}
