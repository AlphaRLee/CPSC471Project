@if (false)
<!-- <img src="{{ asset('storage/' . $summary->photo) }}" alt=""> -->
@endif
<a href="{{ url('/expense/' . $summary->expense_id . '/secretary') }}">
    <img class="card-img-top" src="https://cdn.discordapp.com/attachments/381941488151560192/565764463924609024/20190410_230513.jpg" alt="receipt">
    <div class="card-body">
        <span>Employee: {{ $summary->first_name }} {{ $summary->last_name }}</span>
        <br>
        <span>Expense Code: {{ $summary->expense_code_description }}</span>
        <br>
        <span class="font-weight-light" style="color: gray;">{{ date_format(DateTime::createFromFormat('Y-m-d H:i:s', $summary->time), "Y/m/d H:i") }}</span>
    </div>
    <div class="card-footer text-muted">
        <span>Status: {{ $summary->status }}</span>
    </div>
</a>
