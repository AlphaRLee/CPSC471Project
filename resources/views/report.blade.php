@extends('layouts.app')

@section('content')
<div class="container" style="margin: 10%">
    <div class="row">
        <div class="col-md-2">
            <p>Expense ID</p>
        </div>
        <div class="col-md-2">
            <p>Submitter</p>
        </div>
        <div class="col-md-2">
            <p>Date</p>
        </div>
        <div class="col-md-2">
            <p>Expense Code</p>
        </div>
        <div class="col-md-2">
            <p>Amount</p>
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
            <p>{{ $expense->amount }}</p>
        </div>
    </div>
    <hr>
    @endforeach
</div>


@endsection
