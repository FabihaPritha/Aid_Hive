@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Events</h2>
    <div class="row">
        @foreach($events as $event)
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                    <a href="{{ route('publics.event.details', $event->id) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
