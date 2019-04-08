<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expense'; // Custom table name required
    // public $incrementing = false; // Control auto-incrementing of primary key
    // protected $keyType = 'string'; // Set type of primary key
    // public $timestamps = false; // Set whether a timestamp column exists or not

    protected $fillable = [
        'photo', 'code_id', 'status', 'employee_ssn'
    ];

    public function expenseCode() {
        // Get the expense code whose default ID (PK) matches the code_id (FK)
        return $this->belongsTo('ExpenseCode', 'code_id');
    }

    public function employee() {
        // Get the employee whose SSN (PK) matches the employee_ssn (FK) of this expense
        return $this->belongsTo('Employee', 'employee_ssn', 'ssn');
    }

    public function secretary() {
        return $this->belongsTo('Secretary', 'secretary_ssn', 'ssn');
    }

    public function manager() {
        return $this->belongsTo('Manager', 'manager_ssn', 'ssn');
    }

    public function report() {
        return $this->belongsTo('Report');
    }
}
