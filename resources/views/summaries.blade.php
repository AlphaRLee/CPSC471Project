@extends('layouts.app')

@section('content')
<div class="" style="margin: 10%;">
    <div class="row">
        @foreach ($summaries as $summary)
        <div class="col-md-3">
            <div id="card-{{ $summary->expense_id }}" class="card">
                @include('includes.' . $cardContent)
            </div>
        </div>
        @endforeach

    </div>
</div>

@if ($cardContent == 'managerSummaries')
    @include('includes.managerSummariesFooter')
@endif

@endsection
