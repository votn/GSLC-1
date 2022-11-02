@extends('template')
@section('title', 'legend')

@section('content')
    <div class="row p-md-6">
    @foreach ($postLegend as $PL)
    <div class="col-md-4 p-3">
        <div class="card" style="width: 28rem;">
            <img src="{{ $PL->LegendUrl }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $PL->LegendName }}</h5>
                <p class="card-text">{{ $PL->LegendDesc }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
