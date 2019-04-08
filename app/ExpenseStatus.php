<?php

/*
    ExpenseStatus class
    An "enumerator" container to hold the different expense status constants
 */

namespace App;

class ExpenseStatus
{
    const SUBMITTED = 'submitted';
    const PROCESSED = 'processed';
    const APPROVED = 'approved';
    const REPORTED = 'reported'; // Added to a report
    const REJECTED = 'rejected';
}
 ?>
