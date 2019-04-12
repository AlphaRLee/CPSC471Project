@extends('layouts.app')

@section('content')
<div class="row" style="max-width: 100%">
    <!-- The image -->
    <div class="col-md-8 text-center" style="background-color: #EEE;">
        <img class="expense-img" src="{{ $expense->photo }}" alt="Receipt">
    </div>
    <!-- The information -->
    <div class="col-md-4" style="padding: 20px; background-color: white;">
        <br>
        <h4 class="mb-3">Expense {{ $expense->expense_id }}</h4>
        <hr>
        <form class="" action="{{ $patchHref }}" method="post">
            @csrf
            @method('PATCH')

            <div class="form-group row">
                <label for="employeeName" class="col-sm-3 col-form-label">Employee</label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="employeeName" value="{{ $expense->first_name}} {{ $expense->last_name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="submitted" class="col-sm-3 col-form-label">Submitted</label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="submitted" value="{{ date_format(DateTime::createFromFormat('Y-m-d H:i:s', $expense->time), "Y/m/d H:i") }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="expenseCodeDescription" class="col-sm-3 col-form-label">Expense Code</label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="expenseCodeDescription" value="{{ $expense->expense_code_description}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="employeeName"value="{{ ucfirst($expense->status)}}">
                </div>
            </div>

            <hr>

            @include('includes.' . $formContent)

        </form>
        <br>
        <button type="button" class="btn btn-light" onclick="window.location.href = '{{ URL::previous() }}'">Back</button>
    </div>
</div>


@endsection
