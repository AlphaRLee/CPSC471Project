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
        'photo', 'status', 'employee_ssn'
    ];
}
