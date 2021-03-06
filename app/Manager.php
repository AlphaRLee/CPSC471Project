<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'manager'; // Custom table name required
    public $incrementing = false; // Control auto-incrementing of primary key
    protected $keyType = 'string'; // Set type of primary key
    public $timestamps = false; // Set whether a timestamp column exists or not

    protected $fillable = [
        'ssn', 'office'
    ];

    public function employee() {
        return Employee::where('ssn', $this->ssn)->first();
    }
}
