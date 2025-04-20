@props(['donation'])

<div class="col-md-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Donation #{{ $donation->id }}</h5>
            <p class="card-text">Amount: ৳{{ $donation->amount }}</p>
            <p class="card-text">Event: {{ $donation->event->title }}</p>
            <a href="{{ route('donations.show', $donation->id) }}" class="btn btn-info btn-sm">View Details</a>
        </div>
    </div>
</div>
