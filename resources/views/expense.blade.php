@extends('layouts.app')

@section('content')
<div class="row">
    <!-- The image -->
    <div class="col-md-8 text-center" >
        <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/ReceiptSwiss.jpg/800px-ReceiptSwiss.jpg" alt="Receipt">
            <!-- </div> -->
        <!-- </div> -->
    </div>
    <!-- The information -->
    <div class="col-md-4" style="background-color: lightgray; padding: 10px">
        <h4 class="mb-3">Expense {{ $expense->expense_id }}</h4>
    </div>
</div>


@endsection
