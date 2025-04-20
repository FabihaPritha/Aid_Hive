@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Sectors</h2>
        <a href="{{ route('sectors.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add Sector
        </a>
    </div>

    @if($sectors->isEmpty())
        <div class="alert alert-info">No sectors found.</div>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-hover border">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Sector Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sectors as $key => $sector)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $sector->name }}</td>
                    <td>{{ $sector->description }}</td>
                    <td>
                        <a href="{{ route('sectors.edit', $sector->id) }}" class="btn btn-sm btn-primary me-1">
                            Edit
                        </a>
                        <form action="{{ route('sectors.destroy', $sector->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Are you sure you want to delete this sector?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
