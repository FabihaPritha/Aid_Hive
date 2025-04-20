@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>All Donations</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Amount</th>
                <th>Event</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>৳{{ $donation->amount }}</td>
                    <td>{{ $donation->event->title }}</td>
                    <td>{{ ucfirst($donation->status) }}</td>
                    <td>{{ $donation->created_at->format('d M, Y') }}</td>
                    <td><a href="{{ route('donations.show', $donation->id) }}" class="btn btn-info btn-sm">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $donations->links() }}
</div>
@endsection
