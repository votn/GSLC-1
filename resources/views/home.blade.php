@extends('template')
@section('title', 'legend')

@section('content')
@foreach ($postMap as $PM)
<img src={{ $PM->MapUrl}} alt="" style="width: 100%">
<div class="p-5">
    <h2 class="mb-2">{{ $PM->MapName }}</h2>

    <p class="fs-5">{{ $PM->MapDesc }}</p>
</div>
@endforeach

@endsection
