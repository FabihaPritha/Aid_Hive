@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold mb-4">Add New Sector</h2>

    <form action="{{ route('sectors.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label class="form-label">Sector Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter sector name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" placeholder="Enter sector description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create Sector</button>
        <a href="{{ route('sectors.index') }}" class="btn btn-secondary ms-2">Back</a>
    </form>
</div>
@endsection
