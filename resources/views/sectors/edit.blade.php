@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold mb-4">Edit Sector</h2>

    <form action="{{ route('sectors.update', $sector->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Sector Name</label>
            <input type="text" name="name" value="{{ $sector->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ $sector->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('sectors.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection
