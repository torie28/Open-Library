@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Welcome! Here are the schools for {{ $religion }} students:</h2>
    @if($schools->isEmpty())
        <p>No schools available for the selected religion.</p>
    @else
        <ul class="list-group">
            @foreach($schools as $school)
                <li class="list-group-item">{{ $school->name }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
    