<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Expense;
use App\Department;
use App\Employee;
use App\Manager;
use App\User;
use App\ExpenseStatus;
use App\Report;
use App\FinancialExpert;

class FinancialExpertController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    private function getReportSummaries() {
        $financialExpert = FinancialExpert::where('ssn', Auth::user()->employee_ssn)->first();

        $query = DB::table('employee')
                ->join('report', 'employee.ssn', '=', 'report.manager_ssn')
                ->join('department', 'employee.department_id', '=', 'department.id');
                // ->where('report.financial_expert_ssn', '=', $financialExpert);

        // Order the query contents
        $query = $query->latest();

        // Project the query to relevant fields
        $query = $query->select('report.id as report_id',
                'employee.first_name', 'employee.last_name',
                'department.name as department_name',
                'report.created_at as time');

        $output = $query->get();
        // dd($output);
        return $output;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $summaries = $this->getReportSummaries();
        foreach($summaries as $summary) {
            $summary->expense_id = $summary->report_id;
        }
        return view('summaries', [
            'cardContent' => 'financialExpertSummaries',
            'summaries' => $summaries,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = Expense::where('report_id', '=', $id)
            ->join('employee', 'expense.employee_ssn', '=', 'employee.ssn')
            ->join('department', 'employee.department_id', '=', 'department.id')
            ->join('expense_code', 'expense.code_id', '=', 'expense_code.id')
            ->select('expense.id as expense_id',
                    'first_name', 'last_name',
                    'expense.created_at as time',
                    'expense_code.description as expense_code_description',
                    'department.name as department_name',
                    'expense.amount'
                    );
        $expenses = $query->get();

        $sum = 0;
        foreach ($expenses as $expense) {
            $sum += $expense->amount;
        }

        return view('report', [
            'expenses' => $expenses,
            'sum' => $sum,
        ]);
    }
}
