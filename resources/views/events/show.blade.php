@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>{{ $event->title }} - Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ $event->date->format('d M, Y') }}</p>
            <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>

            <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
        </div>
    </div>
</div>
@endsection
