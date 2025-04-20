@extends('layouts.app') {{-- If you’re using a layout --}}

@section('content')
    <h1>Welcome to AidHive</h1>
    <p>This is the public home page.</p>
    <a href="/sectors">View Sectors</a><br>
    <a href="/events">View Events</a>
@endsection
