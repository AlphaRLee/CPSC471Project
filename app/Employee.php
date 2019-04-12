<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee'; // Custom table name required
    public $incrementing = false; // Control auto-incrementing of primary key
    protected $keyType = 'string'; // Set type of primary key
    public $timestamps = false; // Set whether a timestamp column exists or not

    protected $fillable = [
        'ssn', 'first_name', 'last_name', 'dob', 'gender',
        'address', 'postal_code', 'city', 'province', 'country',
        'department_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function expenses() {
        return $this->hasMany('App\Expense');
    }

    public function department() {
        return $this->belongsTo('App\Department');
    }
}
