@extends('layouts.app')

@section('content')
<h2>Add Sector</h2>

<form method="POST" action="{{ route('sectors.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Sector name" required>
    <button type="submit">Create</button>
</form>
@endsection
