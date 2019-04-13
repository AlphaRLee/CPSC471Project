@extends('layouts.app')

@section('content')
<div class="container" style="margin: 10%">
    <div class="row">
        <div class="col-md-2">
            <p><b>Expense ID</b></p>
        </div>
        <div class="col-md-2">
            <p><b>Submitter</b></p>
        </div>
        <div class="col-md-2">
            <p><b>Date</b></p>
        </div>
        <div class="col-md-2">
            <p><b>Expense Code</b></p>
        </div>
        <div class="col-md-2">
            <p><b>Department</b></p>
        </div>
        <div class="col-md-2">
            <p><b>Amount</b></p>
        </div>
    </div>
    <hr>
    @foreach ($expenses as $expense)
    <div class="row">
        <div class="col-md-2">
            <p>{{ $expense->expense_id }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ $expense->first_name }} {{ $expense->last_name }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ date_format(DateTime::createFromFormat('Y-m-d H:i:s', $expense->time), "Y/m/d H:i") }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ $expense->expense_code_description }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ $expense->department_name }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ $expense->amount }}</p>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">
            <p> <b>Total</b> </p>
        </div>
        <div class="col-md-2">
            <p><b>{{ $sum }}</b></p>
        </div>
    </div>
</div>


@endsection
