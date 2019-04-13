<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/summaries/secretary';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo() {
        if (Auth::user() == null) {
            return 'auth/login';
        }
        $ssn = Auth::user()->employee_ssn;

        $roles = [
            [ 'table' => 'manager', 'link' => 'manager' ],
            [ 'table' => 'secretary', 'link' => 'secretary' ],
            [ 'table' => 'financial_expert', 'link' => 'financialexpert' ],
        ];

        foreach ($roles as $role) {
            if (DB::table($role['table'])->where('ssn', $ssn)->first() !== null) {
                return '/summaries/' . $role['link'];
            }
        }

        return '/home';
    }

    public function viewRedirectTo() {
        return view($this->redirectTo());
    }
}
