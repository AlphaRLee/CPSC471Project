<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Expense;
use App\Department;
use App\Employee;
use App\Secretary;
use App\User;
use App\ExpenseStatus;

class SecretaryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /*
     * Get the information about the expense (e.g. who submitted it, what expense code, etc.)
     *
     * @param $expenseId The ID of the expense to search for. null value means all expenses. Default null.
     * @return the expense model with human-readable information
     */
    private function getExpenseInformation($expenseId = null) {
        $secretary = Secretary::where('ssn', Auth::user()->employee_ssn)->first();
        $departmentId = $secretary->employee()->department_id;

        $query = Employee::where('department_id', '=', $departmentId)
                ->join('expense', 'employee.ssn', '=', 'expense.employee_ssn')
                ->join('expense_code', 'expense.code_id', '=', 'expense_code.id');


        // Optionally restrict to a specific expense
        if (isset($expenseId)) {
            $query = $query->where('expense.id', $expenseId);
        }

        // Order the query contents
        $query = $query->orderByRaw('FIELD(expense.status, "submitted", "processed", "approved", "reported", "rejected")')
                ->latest();

        // Project the query to relevant fields
        $query = $query->select('expense.id as expense_id', 'expense.photo',
                'employee.first_name', 'employee.last_name',
                'expense.amount',
                'expense_code.description as expense_code_description',
                'expense.created_at as time', 'expense.status');

        $output = $query->get();
        if (isset($expenseId) && is_numeric($expenseId)) {
            return $output->first();
        } else {
            return $output;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO add verification
        // $secretary = Auth::user()->secretary();
        $expenseSubmitters = $this->getExpenseInformation();

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
        return view('expense', [
            'formContent' => 'secretaryView',
            'patchHref' => url('/expense/' . $id . '/secretary'),
            'expense' => $this->getExpenseInformation($id),
        ]);
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
        $expense = Expense::find($id);
        // dd($expense);
        if (is_null($expense)) {
            // TODO Add error check here
            dd($id);
        }

        $expense->secretary_ssn = $request->input('secretarySsn');
        $expense->amount = $request->input('amount');
        // $expense-input('description'); // TODO Restore when there's time

        $submitted = $request->input('submit', null);
        $rejected = $request->input('reject', null);
        if (isset($submitted)) {
            $expense->status = ExpenseStatus::PROCESSED;
        } else if (isset($rejected)) {
            $expense->status = ExpenseStatus::REJECTED;
        } else {
            dd("Error, illegal state. Neither submitted nor rejected");
        }

        $expense->save();
        return redirect()->back();
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
