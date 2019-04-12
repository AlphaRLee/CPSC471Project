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
                ->join('expense', 'employee.ssn', '=', 'expense.employee_ssn')
                ->join('expense_code', 'expense.code_id', '=', 'expense_code.id')
                ->orderByRaw('FIELD(expense.status, "submitted", "processed", "approved", "reported", "rejected")')
                ->latest()
                ->select('expense.id as expense_id', 'expense.photo',
                        'employee.first_name', 'employee.last_name',
                        'expense.amount',
                        'expense_code.description as expense_code_description',
                        'expense.created_at as time', 'expense.status')
                ->get();

        // dd($expenseSubmitters);

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
        // Unused
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Unused
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Unused
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
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
