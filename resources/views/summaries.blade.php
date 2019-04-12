@extends('layouts.app')

@section('content')
<div class="" style="margin: 10%;">
    <div class="row">
        @foreach ($summaries as $summary)
        <div class="col-md-3">
            <div class="card">
                @include('includes.' . $cardContent)
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
