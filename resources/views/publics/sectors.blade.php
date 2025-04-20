@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Sectors</h2>
    <div class="row">
        @foreach($sectors as $sector)
        <div class="col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $sector->name }}</h5>
                    <p class="card-text">{{ $sector->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
