@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold mb-3">{{ $sector->name }}</h2>
        <p><strong>Description:</strong></p>
        <p>{{ $sector->description }}</p>
        <a href="{{ route('sectors.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</div>
@endsection
