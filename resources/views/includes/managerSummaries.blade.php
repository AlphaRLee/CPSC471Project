@if (false)
<!-- <img src="{{ asset('storage/' . $summary->photo) }}" alt=""> -->
@endif
<a href="{{ url('/expense/' . $summary->expense_id . '/manager') }}">
    <img class="card-img-top" src="{{ $summary->photo }}" alt="receipt">
    <div class="card-body">
        <span>Employee: {{ $summary->first_name }} {{ $summary->last_name }}</span>
        <br>
        <span>Amount: {{ isset($summary->amount) ? $summary->amount : '--' }}</span>
        <br>
        <span>Expense Code: {{ $summary->expense_code_description }}</span>
        <br>
        <span class="font-weight-light" style="color: gray;">{{ date_format(DateTime::createFromFormat('Y-m-d H:i:s', $summary->time), "Y/m/d H:i") }}</span>
    </div>
    <div class="card-footer text-muted">
        <span>Status: {{ ucfirst($summary->status) }}</span>
    </div>
</a>
