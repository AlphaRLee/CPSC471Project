<input type="hidden" name="secretarySsn" value="{{ Auth::user()->employee_ssn }}">

<div class="form-group row">
    <label for="amount" class="col-sm-3 col-form-label">Amount</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="amount" name="amount" value="" placeholder="0.00">
    </div>
</div>
