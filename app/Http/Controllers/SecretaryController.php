<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Department;
use App\Employee;
use App\Secretary;
use App\User;
use App\ExpenseStatus;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO add verification
        // $secretary = Auth::user()->secretary();
        $secretary = Secretary::where('ssn', '222222222')->first();
        $departmentId = $secretary->employee()->department_id;

        $expenseSubmitters = Employee::where('department_id', '=', $departmentId)
                ->join('expense', 'ssn', '=', 'employee_ssn')
                ->join('expense_code', 'code_id', '=', 'expense_code.id')
                ->orderByRaw('FIELD(status, "submitted", "processed", "approved", "reported", "rejected")')
                ->latest()
                ->get();

        return view('summaries', [
            'cardContent' => 'secretarySummaries',
            'summaries' => $expenseSubmitters,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
