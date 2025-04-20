@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>Accountant Dashboard</h2>
    <div class="row g-4">
        <x-dashboard.card title="Total Donations" value="৳{{ $totalDonations }}" color="success"/>
        <x-dashboard.card title="Pending Verifications" value="{{ $pendingVerifications }}" color="danger"/>
        <x-dashboard.card title="This Month's Total" value="৳{{ $monthlyTotal }}" color="primary"/>
    </div>

    <h5 class="mt-4">Recent Donations</h5>
    <ul class="list-group">
        @foreach($recentDonations as $donation)
            <li class="list-group-item">{{ $donation->donor_name }} - ৳{{ $donation->amount }}</li>
        @endforeach
    </ul>
</div>
@endsection
