@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>Your Dashboard</h2>
    <p><strong>Total Donated:</strong> ৳{{ $totalDonated }}</p>
    <p><strong>Donations Made:</strong> {{ $donationCount }}</p>

    <h5>Recent Donations</h5>
    <ul class="list-group">
        @forelse($recentDonations as $donation)
            <li class="list-group-item">৳{{ $donation->amount }} - {{ $donation->created_at->diffForHumans() }}</li>
        @empty
            <li class="list-group-item text-muted">No donations yet.</li>
        @endforelse
    </ul>
</div>
@endsection
