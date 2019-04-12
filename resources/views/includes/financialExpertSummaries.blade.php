<a href="{{ url('/report/' . $summary->report_id) }}">
    <div class="card-body">
        <span>Manager: {{ $summary->first_name }} {{ $summary->last_name }}</span>
        <br>
        <span>Department: {{ $summary->department_name }}</span>
        <br>
        <span class="font-weight-light" style="color: gray;">{{ date_format(DateTime::createFromFormat('Y-m-d H:i:s', $summary->time), "Y/m/d H:i") }}</span>
    </div>
    <div class="card-footer text-muted">
    </div>
</a>
