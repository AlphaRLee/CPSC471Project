@extends('layouts.app')

@section('content')
<div class="row" style="max-width: 100%">
    <!-- The image -->
    <div class="col-md-8 text-center" style="background-color: #EEE;">
        <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/ReceiptSwiss.jpg/800px-ReceiptSwiss.jpg" alt="Receipt">
            <!-- </div> -->
        <!-- </div> -->
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
            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-sm-6">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
                <div class="col-sm-6 text-right">
                    <input type="submit" class="btn btn-danger" name="reject" value="Reject">
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-light" onclick="window.location.href = '{{ URL::previous() }}'">Back</button>

        </form>
    </div>
</div>


@endsection
