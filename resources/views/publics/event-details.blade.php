@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $event->title }}</h2>
    <p>{{ $event->description }}</p>
    <p><strong>Date:</strong> {{ $event->date }}</p>
</div>
@endsection
