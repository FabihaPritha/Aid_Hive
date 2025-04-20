@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>All Events</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Create New Event</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->date->format('d M, Y') }}</td>
                    <td>{{ $event->location }}</td>
                    <td>
                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $events->links() }}
</div>
@endsection
