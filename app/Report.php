<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report'; // Custom table name required

    protected $fillable = [
        'manager_ssn', 'financial_expert_ssn'
    ];
}
