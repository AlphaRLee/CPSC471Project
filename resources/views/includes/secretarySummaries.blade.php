<div class="card-img-top">
    <img src="{{ asset('storage/' . $summary->photo) }}" alt="">
</div>
<div class="card-body">

    <span>Employee: {{ $summary->first_name }} {{ $summary->last_name }}</span>
    <br>
    <span>Expense Code: {{ $summary->description }}</span>
    <hr>
    <span>Status: {{ $summary->status }}</span>
</div>
