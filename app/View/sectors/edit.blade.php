@extends('layouts.app')

@section('content')
<h2>Edit Sector</h2>

<form method="POST" action="{{ route('sectors.update', $sector) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $sector->name }}" required>
    <button type="submit">Update</button>
</form>
@endsection
