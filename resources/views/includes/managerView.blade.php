<input type="hidden" name="managerSsn" value="{{ Auth::user()->employee_ssn }}">

<div class="form-group row">
    <label for="amount" class="col-sm-3 col-form-label">Amount</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="amount" name="amount" value="{{ $expense->amount }}" placeholder="0.00">
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
    <div class="col-sm-9">
        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
    </div>
</div>

<br>

<div class="row">
    <div class="col-sm-6">
        <input type="submit" class="btn btn-primary" name="submit" value="Approve">
    </div>
    <div class="col-sm-6 text-right">
        <input type="submit" class="btn btn-danger" name="reject" value="Reject">
    </div>
</div>
