@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>Edit Event</h2>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Event Title</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $event->title) }}">
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Event Date</label>
            <input type="date" class="form-control" id="date" name="date" required value="{{ old('date', $event->date->format('Y-m-d')) }}">
            @error('date') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" required value="{{ old('location', $event->location) }}">
            @error('location') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $event->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update Event</button>
    </form>
</div>
@endsection
