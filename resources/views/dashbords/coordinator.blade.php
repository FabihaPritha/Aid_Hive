@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>Program Coordinator Dashboard</h2>
    <div class="row g-4">
        <x-dashboard.card title="Total Events" value="{{ $eventCount }}" color="primary"/>
        <x-dashboard.card title="Upcoming Events" value="{{ $upcomingEvents }}" color="info"/>
        <x-dashboard.card title="Total Donations" value="৳{{ $eventDonations }}" color="success"/>
    </div>

    <h5 class="mt-4">Your Events</h5>
    <ul class="list-group">
        @foreach($events as $event)
            <li class="list-group-item">{{ $event->title }} — {{ $event->date }}</li>
        @endforeach
    </ul>
</div>
@endsection
