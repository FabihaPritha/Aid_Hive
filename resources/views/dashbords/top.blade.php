@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2>Top Management Dashboard</h2>
    <div class="row g-4">
        <x-dashboard.card title="Total Donations" value="৳{{ $totalDonations }}" color="success"/>
        <x-dashboard.card title="Total Events" value="{{ $totalEvents }}" color="warning"/>
        <x-dashboard.card title="Total Sectors" value="{{ $totalSectors }}" color="info"/>
        <x-dashboard.card title="Total Donors" value="{{ $totalDonors }}" color="primary"/>
    </div>
</div>
@endsection
